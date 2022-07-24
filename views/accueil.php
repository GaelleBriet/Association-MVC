<!-- View (Vue : affiche les informations / Page d'accueil) -->


<!-- titre de la page et navicon -->
<?php $title = "Aide Cavaillonaise Aux Animaux"; ?>
<?php $navicon = "assets/empreinte-de-patte.ico"; ?>
<!-- logo et liens du menu nav -->
<?php $logo = "<div style='background-image:url(./assets/img/patte.png); background-repeat: no-repeat; background-size: 10%; width: 400px; height: 40px;'></div>"  ?>
<?php $link_home = "'index.php'"; ?>
<?php $link_administration = "'./controllers/Adherent.php'"; ?>

<!-- header du site: image et texte -->
<?php ob_start(); ?>
<header class="py-5 bg-image-full position-relative" style="background-image: url('./assets/img/chat-profil.jpg'); height:435px; background-position: 50% 45%;">
  <?php $header_img = ob_get_clean(); ?>
  <?php ob_start(); ?>
  <h1 class="text-white fs-3 fw-bolder">Aide Cavaillonaise Aux Animaux</h1>
  <p class="text-white-50 mb-0">Bienvenue sur notre site</p>
  <?php $header_text = ob_get_clean(); ?>



  <?php require('layout.php') ?>

  </nav>

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












  <!-- <!DOCTYPE html>
<html lang=fr>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Full Width Pics - Start Bootstrap Template</title>

  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

  <link href="css/styles.css" rel="stylesheet" />
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#!">Association</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="./controllers/Adherent.php">Administration</a></li>
          <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="py-5 bg-image-full position-relative" style="background-image: url('./assets/img/chat-profil.jpg'); height:435px;">
    <div class="text-center my-5 position-absolute top-50 start-50 translate-middle">

      <h1 class="text-white fs-3 fw-bolder">Full Width Pics</h1>
      <p class="text-white-50 mb-0">Landing Page Template</p>
    </div>
  </header>

  <section class="py-5">
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <h2>Bienvenue</h2>
          <p class="lead">A single, lightweight helper class allows you to add engaging, full width background images to sections of your page.</p>
          <p class="mb-0">The universe is almost 14 billion years old, and, wow! Life had no problem starting here on Earth! I think it would be inexcusably egocentric of us to suggest that we're alone in the universe.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="py-5 bg-image-full" style="background-image: url('./assets/img/chat-face-n&b.jpg')">

    <div style="height: 20rem"></div>
  </div>

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

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/scripts.js"></script>
</body>

</html> -->