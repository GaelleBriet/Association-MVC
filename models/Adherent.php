<?php

namespace Models\Adherent;

use Database\Database;

// model (récupère les données de la base) 

function getAdherents()
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
}
