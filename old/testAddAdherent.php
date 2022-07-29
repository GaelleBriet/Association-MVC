<?php

namespace Models\Adherent;

require_once('src/lib/Database.php');

use Lib\Database\DatabaseConnection;
use Models\Adherent\AdherentRepository as AdherentAdherentRepository;

// model (récupère les données de la base, table adherent) 

class Adherent
{
  public string $nom;
  public string $prenom;
  public string $tel;
  public string $mail;
  public string $date_debut;
}

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


  public function execute()
  {
    $nom = 'Duchnoc';
    $prenom = 'Prenom';
    $tel = '0606060606';
    $mail = 'mail@test.com';
    $date_debut = '2021/12/08';
    // if (!empty($input['nom']) && !empty($input['prenom']) && !empty($input['mail'])) {
    //   $nom = $input['nom'];
    //   $prenom = $input['prenom'];
    //   $tel = $input['tel'];
    //   $mail = $input['mail'];
    //   $date_debut = $input['date_debut'];
    // } else {
    //   throw new \Exception('Les données du formulaire sont invalides.');
    // }

    $adherentRepository = new AdherentRepository();
    $adherentRepository->connection = new DatabaseConnection();
    $success = $adherentRepository->addAdherent($nom, $prenom, $tel, $mail, $date_debut);
    if (!$success) {
      throw new \Exception('Impossible de créer le nouvel adhérent.');
    }
    // } else {
    //   header('Location: index.php?action=liste-adherent');
    // }
  }
}

$test = new AdherentRepository;
$test->connection = new DatabaseConnection();
$test->execute();
var_dump($test);
