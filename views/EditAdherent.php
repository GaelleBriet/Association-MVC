<?php

require_once('ModelBasic.php');

class EditAdherent
{
  public function getModelBasic($adherent)
  {
    $title = "ACAA - Edition de l'adhérent";
    $header_style = "background-image: url('assets/img/chat-couche.jpg'); height: 400px; background-position: 50% 20%;";
    $header_text = $this->getHeaderText();
    $a_class = $this->getAClass();
    $content = $this->getContent($adherent);

    $modelBasic = new ModelBasic($title, $header_style, $header_text, $a_class, $content);
    return $modelBasic;
  }

  private function getHeaderText()
  {
    ob_start(); ?>
    <h1 class="text-white fs-3 fw-bolder">Editer un adhérent</h1>
    <p class="text-white-50 mb-0">texte facultatif</p>
  <?php $header_text = ob_get_clean();
    return $header_text;
  }

  private function getAClass()
  {
    $a_class = ['class="nav-link "', 'class="nav-link active"', 'class="nav-link"'];
    return $a_class;
  }

  private function getContent($adherent)
  {
    ob_start(); ?>
    <div class="py-5">
      <div class="container my-5">
        <div class="row justify-content-center">

          <form class="row g-1 form-control" action="index.php?action=post-edit-adherent" method="post">
            <div class="col-md-6">
              <label for="nom" class="col-sm-2 col-form-label" style="margin-left: 60px">Nom</label>
              <div class="col-sm-10" style="margin: auto;">
                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $adherent['nom'] ?>">
              </div>
            </div>
            <div class="col-md-6">
              <label for="prenom" class="col-sm-2 col-form-label" style="margin-left: 60px">Prénom</label>
              <div class="col-sm-10" style="margin: auto;">
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $adherent['prenom'] ?>">
              </div>
            </div>

            <div class="col-md-6">
              <label for="tel" class="col-sm-2 col-form-label" style="margin-left: 60px">Téléphone</label>
              <div class="col-sm-10" style="margin: auto;">
                <input type="tel" class="form-control" id="tel" pattern="^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$" name="tel" value="<?php echo $adherent['tel'] ?>">
              </div>
            </div>
            <div class="col-md-6">
              <label for="mail" class="col-sm-2 col-form-label" style="margin-left: 60px">Email</label>
              <div class="col-sm-10" style="margin: auto;">
                <input type="email" class="form-control" id="mail" name="mail" value="<?php echo $adherent['mail'] ?>">
              </div>
            </div>

            <div class="col-md-6" style="margin-bottom: 20px">
              <label for="date_debut" class="col-sm-6 col-form-label" style="margin-left: 60px">Date de renouvellement</label>
              <div class="col-sm-10" style="margin: auto;">
                <input type="date" class="form-control" id="date_renouv" name="date_renouv" value="<?php echo $date = date('Y-m-d') ?>">
              </div>
            </div>
            <div class="col-md-6" style="margin-bottom: 20px">
              <label for="date_debut" class="col-sm-6 col-form-label" style="margin-left: 60px">Date de 1ère adhésion</label>
              <div class="col-sm-10" style="margin: auto;">
                <input type="date" class="form-control" id="date_debut" name="date_debut" value="<?php echo $adherent['date_debut'] ?>">
              </div>
            </div>

            <div>
              <input type="hidden" id="id_adherent" name="id_adherent" value="<?php echo $adherent['id_adherent'] ?>">
            </div>

            <div class="col-6">
              <input class="btn btn-secondary" value="Modifier l'adhérent" style="margin-left: 50px; margin-bottom: 10px; background-color: rgb(33,37,41)" type="submit">
            </div>
          </form>
          <div style="margin-top: 50px;">
            <a href="index.php?action=liste-adherents" class="btn bg-light" style=" margin-bottom: 10px;">Retour à la liste des adhérents</a>
          </div>
        </div>
      </div>
    </div>
<?php $content = ob_get_clean();
    return $content;
  }
}

?>