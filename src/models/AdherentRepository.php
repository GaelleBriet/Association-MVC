<?php

namespace Models\AdherentRepository;

require_once('src/lib/Database.php');

use Lib\Database\DatabaseConnection;
use PDO;

class AdherentRepository
{
  public DatabaseConnection $connection;

  public function addAdherent($monadherent)
  { // ajoute le nouvel adhérent dans la bdd
    $this->setConnection();

    $stmt = $this->connection->getConnection()->prepare("INSERT INTO adherent(nom, prenom, tel, mail, date_debut) VALUES(?,?,?,?,?);");
    $stmt->execute([$monadherent->nom, $monadherent->prenom,  $monadherent->tel,  $monadherent->mail,  $monadherent->date_debut]);

    return $this->connection->getConnection()->lastInsertId();
  }

  public function addAddhesion($monadhesion)
  {
    $this->setConnection();
    $stmt = $this->connection->getConnection()->prepare("INSERT INTO adhesion(date_debut, date_fin, tarif, id_adherent) VALUES(?,?,?,?)");
    $stmt->execute([$monadhesion->date_debut, $monadhesion->date_fin, $monadhesion->tarif, $monadhesion->id_adherent]);
    return $stmt;
  }

  public function updateAdherent($adherent)
  { // modifie l'adhérent dans la bdd
    $this->setConnection();
    $stmt = $this->connection->getConnection()->prepare(
      "UPDATE adherent SET 
    adherent.nom = :nom,
    adherent.prenom = :prenom,
    adherent.tel = :tel,
    adherent.mail = :mail,
    adherent.date_debut = :date_debut
    WHERE adherent.id_adherent = :id_adherent"
    );

    $stmt->execute([$adherent['nom'], $adherent['prenom'], $adherent['tel'], $adherent['mail'], $adherent['date_debut'], $adherent['id_adherent']]);
    return $stmt;
  }

  public function updateAdhesion($adherent)
  { //modifie l'adhésion dans la bdd
    $this->setConnection();
    $stmt2 = $this->connection->getConnection()->prepare(
      "UPDATE adhesion SET
      adhesion.date_debut = :date_debut,
      adhesion.date_fin = :date_fin,
      adhesion.tarif = :tarif
      WHERE adhesion.id_adherent = :id_adherent"
    );
    $stmt2->execute([$adherent['date_renouv'], $adherent['date_fin'], $adherent['tarif'], $adherent['id_adherent']]);
    return $stmt2;
  }


  public function getAllAdherents()
  { //récupère les adhérents dont adhésion se termine dans + 30 jours 
    $this->setConnection();
    $sqldate = 'SET lc_time_names = fr_FR';
    $sql = 'SELECT adherent.id_adherent, adherent.nom, adherent.prenom, adherent.tel, adherent.mail, adhesion.date_fin,
    DATE_FORMAT(adhesion.date_fin, "%d %M %Y") AS date_fr
    FROM adherent, adhesion 
    WHERE adhesion.id_adherent = adherent.id_adherent 
    AND adhesion.date_fin > curdate() + INTERVAL 30 DAY';
    $adherents = $this->connection->getConnection()->query($sqldate);
    $adherents = $this->connection->getConnection()->query($sql);
    return $adherents;
  }

  public function getOldAdherents()
  { //récupère les adhérents dont adhésion se termine dans - 30 jours 
    $this->setConnection();
    $sqldate = 'SET lc_time_names = fr_FR';
    $sql = 'SELECT adhesion.date_fin, adherent.id_adherent, adherent.nom, adherent.prenom, adherent.tel, adherent.mail ,
    DATE_FORMAT(adhesion.date_fin, "%d %M %Y") AS date_fr
    FROM adherent, adhesion 
    WHERE adhesion.id_adherent = adherent.id_adherent 
    AND DATE_SUB(adhesion.date_fin, INTERVAL 30 DAY) < curdate() ORDER BY adhesion.date_fin';
    $old_adherents = $this->connection->getConnection()->query($sqldate);
    $old_adherents = $this->connection->getConnection()->query($sql);
    return $old_adherents;
  }

  public function getSelectedAdherent()
  { //récupère l'adhérent selon son id
    $this->setConnection();
    $sql = 'SELECT * FROM adherent WHERE id_adherent = :id';
    $stmt = $this->connection->getConnection()->prepare($sql);
    $stmt->execute([
      'id' => $_GET['id'],
    ]);
    $adherent = $stmt->fetch(PDO::FETCH_ASSOC);
    return $adherent;
  }


  private function setConnection()
  { //connection à la bdd
    if (!isset($connection)) {
      $this->connection = new DatabaseConnection();
    }
  }
}


// $test = new Adherent('Dulac', 'Jeanne', '0600000000', 'example@mail.fr', '2022/01/01');
// var_dump($test);
// $adherentRepository = new AdherentRepository;
// $test = $adherentRepository->addAdh($test);
