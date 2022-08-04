<!-- routeur -->
<?php

session_start();

use Controllers\CntrlAdherent\CntrlAdherent;
use function Controllers\Accueil\accueil;

require_once('views/Connexion.php');
require_once('src/controllers/Accueil.php');
require_once('src/controllers/CntrlAdherent.php');


// index.php : accueil du site
// index.php?action=liste-adherents.php : page "administration" (liste des adhérents)
// index.php?action=add-adherent.php : page de création/ajout d'un adhérent
if (!isset($_SESSION['role']) || empty($_SESSION['role'])) {
  $_SESSION['role'] = 'visiteur';
}


try {
  if (isset($_GET['action']) && $_GET['action'] !== '') {



    if ($_GET['action'] === 'liste-adherents' && $_SESSION['role'] == 'admin') {
      (new CntrlAdherent())->listeAdherents();
    } elseif ($_GET['action'] === 'add-adherent' && $_SESSION['role'] == 'admin') {
      (new CntrlAdherent())->addAdherent();
    } elseif ($_GET['action'] === 'post-adherent' && $_SESSION['role'] == 'admin') {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        (new CntrlAdherent())->execute();
      }
    } elseif ($_GET['action'] === 'add-adherent-reussite' && $_SESSION['role'] == 'admin') {
      (new CntrlAdherent())->addAdherentReussite();
    } elseif ($_GET['action'] === 'edit-adherent' && $_SESSION['role'] == 'admin') {
      (new CntrlAdherent())->editAdherent();
    } elseif ($_GET['action'] === 'post-edit-adherent' && $_SESSION['role'] == 'admin') {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        (new CntrlAdherent())->update();
      }
    } elseif ($_GET['action'] === 'deconnexion') {
      // on détruit les variables de session
      session_unset();
      // on detruit notre session
      session_destroy();
      // on redirige vers la page d'accueil
      header('location: index.php');
    } elseif ($_GET['action'] === 'connexion') {
      $vue = new Connexion();
      $modelBasic = $vue->getModelBasic();
      require_once('views/layoutModel.php');
    } elseif ($_GET['action'] === 'login') {
      //on définit un login et mot depasse pour tester
      $email_valide = 'moi@mail.com';
      $password_valide = 'password';
      //on teste si les variables sont définies
      if (isset($_POST['email']) && isset($_POST['password'])) {
        //on vérifie les infos du formulaire
        if ($email_valide == $_POST['email'] && $password_valide == $_POST['password']) {
          // ok : on démarre la session
          session_start();
          // on enregistre les paramètres comme variables de session ($email et $password)
          // $_SESSION['email'] = $_POST['email'];
          // $_SESSION['password'] = $_POST['password'];
          $_SESSION['role'] = "admin";
          // on dirige le visiteur vers la page d'administration
          header('location: index.php?action=liste-adherents');
        } else {
          // si le visiteur n'est pas reconnu comme membre / admin on alerte
          echo '<body onload="alert(\'Mauvais Login et/ou Mot de passe ...\')">';
          // puis on redirige
          echo '<meta http-equiv="refresh" content="0;URL=index.php">';
        }
      } else {
        echo 'Les variables du formulaire ne sont pas déclarées.';
      }
    } else {
      header('location: index.php?action=connexion');
    }
  } else {
    accueil();
  }
} catch (Exception $e) {
  echo 'Erreur : ' . $e->getMessage();
}


?>