<!-- routeur -->
<?php

use Controllers\CntrlAdherent\CntrlAdherent;
use function Controllers\Accueil\accueil;

require_once('src/controllers/Accueil.php');
require_once('src/controllers/Accueil.php');
require_once('src/controllers/CntrlAdherent.php');

// index.php : accueil du site
// index.php?action=liste-adherents.php : page "administration" (liste des adhérents)
// index.php?action=add-adherent.php : page de création/ajout d'un adhérent

try {
  if (isset($_GET['action']) && $_GET['action'] !== '') {

    if ($_GET['action'] === 'liste-adherents') {
      (new CntrlAdherent())->listeAdherents();
    } elseif ($_GET['action'] === 'add-adherent') {
      (new CntrlAdherent())->addAdherent();
    } elseif ($_GET['action'] === 'post-adherent') {
      $input = null;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input = $_POST;
      }
      (new CntrlAdherent())->execute($input);
    } elseif ($_GET['action'] === 'add-adherent-reussite') {
      (new CntrlAdherent())->addAdherentReussite();
    } else {
      throw new Exception('La page !demandée n\'existe pas');
    }
  } else {
    accueil();
  }
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}

?>