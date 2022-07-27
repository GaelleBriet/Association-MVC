<!-- View (Vue : affiche les informations / Page d'accueil) -->
<!-- <head><title> titre de la page -->
<?php $title = "Aide Cavaillonaise Aux Animaux"; ?>

<!-- <nav> logo et liens du menu nav -->
<?php $link_home = '/index.php'; ?>
<?php $link_administration = '<li class="nav-item"><a class="nav-link" href="index.php?action=liste-adherents">Administration</a></li>'; ?>

<!-- <header> banniere du site: image -->
<?php ob_start(); ?>
<header class="py-5 bg-image-full position-relative" style="background-image: url('./assets/img/chat-profil.jpg'); height:435px; background-position: 50% 45%;">
  <?php $header_img = ob_get_clean(); ?>
  <!-- <header> banniere du site: texte -->
  <?php ob_start(); ?>
  <h1 class="text-white fs-3 fw-bolder">Aide Cavaillonaise Aux Animaux</h1>
  <p class="text-white-50 mb-0">Bienvenue sur notre site</p>
  <?php $header_text = ob_get_clean(); ?>



  <?php require('layout.php') ?>



  <!-- Content section-->
  <section class="py-5">
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h2>Bienvenue</h2>
          <p class="lead">Notre association œuvre pour le bien être des animaux : stériliser, soigner, nourrir et contrôler les populations félines.</p>
          <p class="mb-0">Nous avons construit un réseau efficace pour les adoptions, luttons contre les maltraitances animales, sensibilisons adultes et enfants à la cause animale.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Image element - set the background image for the header in the line below-->
  <div class="py-5 bg-image-full" style="background-image: url('./assets/img/chat-eau.jpg'); background-position: 50% 30%;">
    <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
    <div style="height: 20rem"></div>
  </div>
  <!-- Content section-->
  <section class="py-5">
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h2>Engaging Background Images</h2>
          <p class="lead">The background images used in this template are sourced from Unsplash and are open source and free to use.</p>
          <p class="mb-0">I can't tell you how many people say they were turned off from science because of a science teacher that completely sucked out all the inspiration and enthusiasm they had for the course.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer-->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>