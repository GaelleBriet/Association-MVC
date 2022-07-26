<?php

use function views\contextRoot\getContextPath;

require('contextRoot.php') ?>

<!DOCTYPE html>
<html lang=fr>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- Titre de la page -->
  <title><?= $title ?></title>
  <!-- Favicon-->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/empreinte-de-patte.ico">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body>
  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <!-- logo -->
      <div style='background-image:url(./assets/img/patte.png); background-repeat: no-repeat; background-size: 10%; width: 400px; height: 40px;'></div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item"><a <?= $a_class[0] ?> href="<?= getContextPath() ?>/index.php">Home</a></li>

          <li class="nav-item"><a <?= $a_class[1] ?> href="<?= getContextPath() ?>/index.php?action=liste-adherents">Administration</a></li>

          <li class="nav-item"><a <?= $a_class[2] ?> href="#!">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="py-5 bg-image-full position-relative" style="<?= $header_style ?>">
    <div class="text-center my-5 position-absolute top-50 start-50 translate-middle">
      <?= $header_text ?>
    </div>
  </header>

  <!-- Content section-->
  <?= $content ?>

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

</body>

</html>