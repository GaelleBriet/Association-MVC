<?php

namespace Models\AdherentRepository;

require_once('src/lib/Database.php');

use Lib\Database\DatabaseConnection;
use Models\Adherent\Adherent;


class AdherentRepository
{
  public DatabaseConnection $connection;

  public function getAllAdherents(): array
  {
    $statement = $this->connection->getConnection()->query('SELECT * FROM adherent');
    // $stmt->execute();
    $adherents = [];
    while (($row = $statement->fetch())) {
      $adherent = new Adherent();
      $adherent->nom = $row['nom'];
      $adherent->prenom = $row['prenom'];
      $adherent->tel = $row['tel'];
      $adherent->mail = $row['mail'];
      $adherent->date_debut = $row['date_debut'];

      $adherents[] = $adherent;
    }
    return $adherents;
  }

  public function addAdherent($nom, $prenom, $tel, $mail, $date_debut)
  {
    $statement = $this->connection->getConnection()->prepare("INSERT INTO adherent(nom, prenom, tel, mail, date_debut) VALUES(?,?,?,?,?)");

    $affectedLines = $statement->execute([$nom, $prenom, $tel, $mail, $date_debut]);
    return ($affectedLines > 0);
  }
}
