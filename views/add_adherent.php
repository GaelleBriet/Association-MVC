<!-- titre de la page -->
<?php $title = "ACAA - Administration"; ?>

<!-- liens du menu nav -->
<?php $a_class = 'class="nav-link"' ?>
<?php $a_class2 = 'class="nav-link active"' ?>
<?php $a_class3 = 'class="nav-link"' ?>

<!-- Header  -->
<?php $header_style = "background-image: url('assets/img/chat-blanc.jpg'); background-position: 50% 25%; height:300px; "; ?>
<?php ob_start(); ?>
<h1 class="text-white fs-3 fw-bolder">Ajouter un adhérent</h1>
<p class="text-white-50 mb-0">texte facultatif</p>
<?php $header_text = ob_get_clean(); ?>


<!-- Content section-->
<?php ob_start(); ?>
<div class="py-5">
  <div class="container my-5">
    <!-- <div class="alert alert-success translate-middle" role="alert" style="position: absolute; top: 42%; left: 50%; ">
      <p>Création de l'adhérent réussie!</p>
    </div> -->
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
</div>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>