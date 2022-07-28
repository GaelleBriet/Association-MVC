<?php

namespace Models\Adherent;

require_once('src/lib/Database.php');
require_once('AdherentRepository.php');

class Adherent
{
  public string $nom;
  public string $prenom;
  public string $tel;
  public string $mail;
  public string $date_debut;
}












































// FONCTION SEULE QUI FONCTIONNE SANS CLASSE //
// function getAllAdherents()
// {
//   // on se connecte à la bdd
//   $database = connect();

//   //on récupère les adhérents
//   $stmt = $database->query('SELECT * FROM adherent');

//   $adherents = [];
//   while (($row = $stmt->fetch())) {
//     $adherent = [
//       'nom' => $row['nom'],
//       'prenom' => $row['prenom'],
//       'tel' => $row['tel'],
//       'mail' => $row['mail'],
//       'date_debut' => $row['date_debut'],

//     ];
//     $adherents[] = $adherent;
//   }
//   return $adherents;
// }



















// LA CONNECTION A LA BDD FONCTIONNE ///
// $databse = new Database;
// function getAdherents($database)
// {
//   $stmt = $database->connect()->query('SELECT * FROM adherent');
//   $adherents = [];
//   while (($row = $stmt->fetch())) {
//     $adherent = [
//       'nom' => $row['nom'],
//       'prenom' => $row['prenom'],
//       'tel' => $row['tel'],
//       'mail' => $row['mail'],
//       'date_debut' => $row['date_debut'],

//     ];
//     $adherents[] = $adherent;
//   }
//   return $adherents;
// }





















////// fonctionne connection a la bdd faite ici sans recours au fichier database.php

/* function getAdherents()
{
  //connection à la bdd
  try {
    $database = new \PDO('mysql:host=localhost;dbname=asso_chats;charset=utf8', 'root', '');
  } catch (\PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  //on récupère les adhérents
  $stmt = $database->query('SELECT * FROM adherent');

  $adherents = [];
  while (($row = $stmt->fetch())) {
    $adherent = [
      'nom' => $row['nom'],
      'prenom' => $row['prenom'],
      'tel' => $row['tel'],
      'mail' => $row['mail'],
      'date_debut' => $row['date_debut'],

    ];
    $adherents[] = $adherent;
  }
  return $adherents;
} */
