<?php
//on définit un login et mot depasse pour tester
$email_valide = 'moi@mail.com';
$password_valide = 'password';

//on teste si les variables sont définies
if (isset($_POST['email']) && isset($_POST['password'])) {

  //on vérifie les infos du formulaire
  if ($login_valide == $_POST['email'] && $password_valide == $_POST['password']) {
    // ok : on démarre la session
    session_start();
    // on enregistre les paramètres comme variables de session ($email et $password)
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    // on dirige le visiteur vers la page d'administration
    header('location: liste-adherents.php');
  } else {
    // si le visiteur n'est pas reconnu comme membre / admin on alerte
    echo '<body onload="alert(\'Mauvais Login et/ou Mot de passe ...\')">';
    // puis on redirige
    // echo '<meta http-equiv="refresh" content="0;URL=index.php">';
  }
} else {
  echo 'Les variables du formulaire ne sont pas déclarées.';
}
