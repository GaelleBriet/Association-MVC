<?php

namespace Models\AdherentRepository;

require_once('src/lib/Database.php');

use Lib\Database\DatabaseConnection;


class AdherentRepository
{
  public DatabaseConnection $connection;


  public function addAdherent($adherent)
  {
    $this->setConnection();
    $stmt = $this->connection->getConnection()->prepare("INSERT INTO adherent(nom, prenom, tel, mail, date_debut) VALUES(?,?,?,?,?)");
    $stmt->execute([$adherent->nom, $adherent->prenom,  $adherent->tel,  $adherent->mail,  $adherent->date_debut]);
    return $stmt;
  }


  public function getAllAdherents()
  {
    $this->setConnection();
    $adherents = $this->connection->getConnection()->query('SELECT * FROM adherent');
    return $adherents;
  }


  private function setConnection()
  {
    if (!isset($connection)) {
      $this->connection = new DatabaseConnection();
    }
  }
}


// $test = new Adherent('Dulac', 'Jeanne', '0600000000', 'example@mail.fr', '2022/01/01');
// var_dump($test);
// $adherentRepository = new AdherentRepository;
// $test = $adherentRepository->addAdh($test);
