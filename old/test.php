<?php

namespace Models\Adherent;

use Lib\Database\DatabaseConnection;

// model (récupère les données de la base, table adherent) 

require_once('src/lib/Database.php');
// require_once('../lib/Database.php');


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
}


// function getAllAdherents(): array
// {
//   $pdo = connect();

//   $stmt = $pdo->query('SELECT * FROM adherent');
//   // $stmt->execute();

//   $adherents = [];
//   while (($row = $stmt->fetch())) {
//     $adherent = new Adherent();
//     $adherent->nom = $row['nom'];
//     $adherent->prenom = $row['prenom'];
//     $adherent->tel = $row['tel'];
//     $adherent->mail = $row['mail'];
//     $adherent->date_debut = $row['date_debut'];

//     $adherents[] = $adherent;
//   }
//   return $adherents;
// }

// function createAdherent($nom, $prenom, $tel, $mail, $date_debut)
// {
//   $pdo = connect();
//   $stmt = $pdo->prepare('INSERT INTO adherent(id_adherent, nom, prenom, tel, mail, date_debut) VALUES(?,?,?,?, NOw())');
//   $affectedLines = $stmt->execute([$nom, $prenom, $tel, $mail, $date_debut]);
//   return ($affectedLines > 0);
// }



// function connect(AdherentRepository $repository)
// {
//   $db_host = "localhost";
//   $db_name = "asso_chats";
//   $db_user = "root";
//   $db_pass = "";
//   $charset = "utf8mb4";

//   if ($repository->pdo = null) {
//     $dsn = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=" . $charset;
//     $repository->pdo = new \PDO($dsn, $db_user, $db_pass);
//     $repository->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//     $repository->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
//     $repository->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
//   }
// }

// function connect()
// {
//   $db_host = "localhost";
//   $db_name = "asso_chats";
//   $db_user = "root";
//   $db_pass = "";
//   $charset = "utf8mb4";

//   try {
//     $dsn = "mysql:host=" . $db_host . ";dbname=" . $db_name . ";charset=" . $charset;
//     $pdo = new \PDO($dsn, $db_user, $db_pass);
//     $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//     $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
//     $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
//     return $pdo;
//   } catch (\PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
//   }
// }




































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
