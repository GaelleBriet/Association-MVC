<!-- View (Vue de la liste des adhérents) -->


<!-- titre de la page et navicon -->
<?php $title = "ACAA - Administration"; ?>
<?php $navicon = "../assets/empreinte-de-patte.ico"; ?>
<!--logo et liens du menu nav -->
<?php $logo = "<div style='background-image:url(../assets/img/patte.png); background-repeat: no-repeat; background-size: 10%; width: 400px; height: 40px;'></div>"  ?>
<?php $link_home = "'../index.php'"; ?>
<?php $link_administration = "'../controllers/Adherent.php'"; ?>

<!-- header du site: image -->
<?php ob_start(); ?>
<header class="py-5 bg-image-full position-relative" style="background-image: url('../assets/img/chat-n&b.jpg'); background-position: 50% 25%; height:300px; ">
  <?php $header_img = ob_get_clean(); ?>
  <!-- header du site: itexte -->
  <?php ob_start(); ?>
  <h1 class="text-white fs-3 fw-bolder">Administration des Adhérents</h1>
  <p class="text-white-50 mb-0">texte facultatif</p>
  <?php $header_text = ob_get_clean(); ?>

  <?php require('layout.php') ?>

  <!DOCTYPE html>
  <html lang=fr>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <!-- Favicon-->
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/empreinte-de-patte.ico">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../public/css/styles.css" rel="stylesheet" />
    <link href="../public/css/sb-admin-2.css" rel="stylesheet">
  </head>



  <body>
    <!-- Responsive navbar-->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#!">Association</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="../index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="../controllers/Adherent.php">Administration</a></li>
          <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav> -->


    <!-- Header - set the background image for the header in the line below-->

    <!-- <header class="py-5 bg-image-full position-relative" style="background-image: url('../assets/img/chat-n&b.jpg'); background-position: 50% 25%; height:300px; ">
    <div class="text-center my-5 position-absolute top-50 start-50 translate-middle">
      <h1 class="text-white fs-3 fw-bolder">Administration des Adhérents</h1>
      <p class="text-white-50 mb-0">Landing Page Template</p>
    </div>
  </header> -->


    <!-- Begin Page Content -->
    <div class="container-fluid">

      <div class="card shadow mb-4">
        <div class="card-body">

          <div class="table-responsive" style="overflow: auto; height:600px;">
            <table class=" table table-bordered table-fixed" id="dataTable" width="100%" cellspacing="0">

              <thead>
                <tr>
                  <th class=" bg-dark text-gray-100" style=" position: sticky; top: 0;">Nom</th>
                  <th class=" bg-dark text-gray-100" style="position: sticky; top: 0;">Prénom</th>
                  <th class=" bg-dark text-gray-100" style="position: sticky; top: 0;">Téléphone</th>
                  <th class=" bg-dark text-gray-100" style="position: sticky; top: 0;">Adresse e-mail</th>
                </tr>
              </thead>

              <tbody>
                <?php
                foreach ($adherents as $adherent) {
                  echo '
                <tr>
                  <td>' . $adherent['nom'] . '</td>
                  <td>' . $adherent['prenom'] . '</td>
                  <td>' . $adherent['tel'] . '</td>
                  <td>' . $adherent['mail'] . '</td>
                </tr>
                ';
                }
                ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->











  </body>