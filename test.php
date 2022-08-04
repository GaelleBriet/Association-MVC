<?php
require_once('src/lib/Database.php');

$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . CHARSET;
$options = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
  $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (\PDOException $e) {
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// $stmt = $pdo->prepare("INSERT INTO `adherent` (`id_adherent`, `nom`, `prenom`, `tel`, `mail`, `date_debut`) VALUES (NULL, 'XXXXXXXXX', 'rgsb', '07-00-00-00-00', 'dupond.jean@mail.com', '2021-09-01');");
// $stmt->execute();
// $user = $stmt->fetch();

// $lastid =  $pdo->lastInsertId();

// $stmt = $pdo->prepare("INSERT INTO `adhesion` (`date_debut`, `date_fin`, `tarif`, `id_adherent`) VALUES ( ?, ?, '10', ?);");
// $stmt->execute(['2021-09-01', '2023-02-01', $lastid]);
// $user = $stmt->fetch();


// $stmt = $pdo->prepare("UPDATE adherent SET adherent.nom = 'XX', adherent.prenom = 'PPPP', adherent.tel = '0606060606', adherent.mail = 'MAIL', adherent.date_debut = '2000-10-10' WHERE adherent.id_adherent = 1");
// $stmt2 = $pdo->prepare("UPDATE adhesion SET adhesion.date_debut = '2010-11-11', adhesion.date_fin = '2100-11-11', adhesion.tarif = '10' WHERE adhesion.id_adherent = 1");

// $stmt->execute();
// $stmt2->execute();

("SELECT adherent.id_adherent, adherent.nom, adherent.prenom, adherent.tel, adherent.mail,
DATE_FORMAT(adhesion.date_fin, '%d-%m-%Y') AS date_fr
FROM adherent, adhesion 
WHERE adhesion.id_adherent = adherent.id_adherent 
AND adhesion.date_fin > curdate() + INTERVAL 30 DAY");




$tel = '06.06/06-06,06';
$telSeparators = array("/", ".", "-", ",");
$tel = str_replace($telSeparators, "", $tel);
var_dump($tel);
