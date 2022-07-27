<!-- View (Vue de la liste des adhérents) -->


<?php

// <head> titre de la page et navicon 
$title = "ACAA - Administration"; ?>
<?php $favicon = "assets/empreinte-de-patte.ico"; ?>
<?php $linkcss = "assets/css/styles.css"; ?>

<!-- <nav> logo et liens du menu nav  -->
<?php $logo = "<div style='background-image:url(assets/img/patte.png); background-repeat: no-repeat; background-size: 10%; width: 400px; height: 40px;'></div>"  ?>
<?php $link_home = '<li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>'; ?>
<?php $link_administration = '<li class="nav-item"><a class="nav-link active" href="index.php?action=liste-adherents">Administration</a></li>'; ?>

<!-- <header> banniere du site: image -->
<?php ob_start(); ?>
<header class="py-5 bg-image-full position-relative" style="background-image: url('assets/img/chat-n&b.jpg'); background-position: 50% 25%; height:300px; ">
  <?php $header_img = ob_get_clean(); ?>
  <!-- <header> banniere du site: texte -->
  <?php ob_start(); ?>
  <h1 class="text-white fs-3 fw-bolder">Administration des Adhérents</h1>
  <p class="text-white-50 mb-0">texte facultatif</p>
  <?php $header_text = ob_get_clean(); ?>

  <?php require('layout.php') ?>



  <!-- Begin Page Content -->
  <!-- <div class="container-fluid"> -->
  <div class="py-5">

    <!-- <div class="card shadow mb-4"> -->
    <div class="container my-5">

      <!-- <div class="card-body"> -->
      <div class="row justify-content-center">

        <p><a href="index.php?action=add-adherent" class="btn btn-dark">Ajouter un adhérent</a></p>

        <div class="table-responsive" style="overflow: auto; height:600px; margin-top: 50px;">
          <table class=" table table-bordered table-fixed" id="dataTable" width="100%" cellspacing="0">

            <thead class="bg-dark text-gray-100" style=" position: sticky; top: 0;">
              <tr>
                <th style=" position: sticky; top: 0;">Nom</th>
                <th style="position: sticky; top: 0;">Prénom</th>
                <th style="position: sticky; top: 0;">Téléphone</th>
                <th style="position: sticky; top: 0;">Adresse e-mail</th>
              </tr>
            </thead>

            <tbody>
              <?php
              foreach ($adherents as $adherent) {
                echo '
                  <tr>
                    <td>' . $adherent->nom . '</td>
                    <td>' . $adherent->prenom . '</td>
                    <td>' . $adherent->tel . '</td>
                    <td>' . $adherent->mail . '</td>
                  </tr>
                  ';
              }

              // foreach ($adherents as $adherent) {
              //   echo '
              //   <tr>
              //     <td>' . $adherent['nom'] . '</td>
              //     <td>' . $adherent['prenom'] . '</td>
              //     <td>' . $adherent['tel'] . '</td>
              //     <td>' . $adherent['mail'] . '</td>
              //   </tr>
              //   ';
              // }
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