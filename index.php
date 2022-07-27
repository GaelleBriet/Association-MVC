<!-- routeur -->
<?php

use Controllers\AddAdherent\AddAdherent;

use function Controllers\Accueil\accueil;
use function Controllers\Adherent\adherent;


require_once('src/controllers/Accueil.php');
require_once('src/controllers/Adherent.php');
require_once('src/controllers/AddAdherent.php');


// index.php : accueil du site
// index.php?action=liste-adherents.php : page "administration" (liste des adhérents)
// index.php?action=add-adherent.php : page de création/ajout d'un adhérent

try {
  if (isset($_GET['action']) && $_GET['action'] !== '') {
    if ($_GET['action'] === 'liste-adherents') {
      adherent();
    } elseif ($_GET['action'] === 'add-adherent') {
      (new AddAdherent())->addAdherent();
    } elseif ($_GET['action'] === 'post-adherent') {
      $input = null;
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $input = $_POST;
      }
      (new AddAdherent())->execute($input);
    } elseif ($_GET['action'] === 'add-adherent-reussite') {
      (new AddAdherent())->addAdherentReussite();
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