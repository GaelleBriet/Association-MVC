<!-- View (Vue de la page ajout adhérent) -->


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
<header class="py-5 bg-image-full position-relative" style="background-image: url('assets/img/chat-blanc.jpg'); background-position: 50% 25%; height:300px;">
  <?php $header_img = ob_get_clean(); ?>
  <!-- <header> banniere du site: texte -->
  <?php ob_start(); ?>
  <h1 class="text-body fs-3 fw-bolder">Ajouter un Adhérent</h1>
  <p class="text-primary-50 mb-0">texte facultatif</p>
  <?php $header_text = ob_get_clean(); ?>

  <?php require('layout.php') ?>



  <!-- Begin Page Content -->
  <!-- <div class="container-fluid"> -->
  <div class="py-5">

    <!-- <div class="card shadow mb-4"> -->
    <div class="container my-5">

      <!-- <div class="card-body"> -->
      <div class="row justify-content-center">


        <form class="row g-1 form-control" action="index.php?action=post-adherent" method="post">
          <div class="col-md-6">
            <label for="nom" class="col-sm-2 col-form-label" style="margin-left: 60px">Nom</label>
            <div class="col-sm-10" style="margin: auto;">
              <input type="text" class="form-control" id="nom" name="nom">
            </div>
          </div>
          <div class="col-md-6">
            <label for="prenom" class="col-sm-2 col-form-label" style="margin-left: 60px">Prénom</label>
            <div class="col-sm-10" style="margin: auto;">
              <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
          </div>
          <div class="col-md-6">
            <label for="tel" class="col-sm-2 col-form-label" style="margin-left: 60px">Téléphone</label>
            <div class="col-sm-10" style="margin: auto;">
              <input type="tel" class="form-control" id="tel" pattern="^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$" placeholder="06 00 00 00 00" name="tel">
            </div>
          </div>
          <div class="col-md-6">
            <label for="mail" class="col-sm-2 col-form-label" style="margin-left: 60px">Email</label>
            <div class="col-sm-10" style="margin: auto;">
              <input type="email" class="form-control" id="mail" placeholder="exemple@mail.com" name="mail">
            </div>
          </div>
          <div class="col-md-6" style="margin-bottom: 20px">
            <label for="date_debut" class="col-sm-6 col-form-label" style="margin-left: 60px">Date d'adhésion</label>
            <div class="col-sm-10" style="margin: auto;">
              <input type="date" class="form-control" id="date_debut" name="date_debut">
            </div>
          </div>
          <div class="col-md-6" style="margin-bottom: 20px" style="visibility: hidden">
          </div>
          <div class="col-6">
            <input class="btn btn-secondary" value="Créer l'adhérent" style="margin-left: 50px; margin-bottom: 10px; background-color: rgb(33,37,41)" type="submit">
          </div>
        </form>
        <div style="margin-top: 50px;">
          <a href="index.php?action=liste-adherents" class="btn bg-light" style=" margin-bottom: 10px;">Retour à la liste des adhérents</a>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->
  <!-- Footer-->
  <footer class=" py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>

  </body>