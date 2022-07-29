<?php

require_once('ModelBasic.php');

class ListeAdherents
{

  public function getModelBasic($adherents)
  {
    $title = "ACAA - Administration";
    $header_style = "background-image: url('assets/img/chat-n&b.jpg'); background-position: 50% 25%; height: 300px;";
    $header_text = $this->getHeaderText();
    $a_class = $this->getAClass();
    $content = $this->getContent($adherents);

    $modelBasic = new ModelBasic($title, $header_style, $header_text, $a_class, $content);
    return $modelBasic;
  }


  private function getHeaderText()
  {
    ob_start();
?>
    <h1 class="text-white fs-3 fw-bolder">Administration des Adhérents</h1>
    <p class="text-white-50 mb-0">texte facultatif</p>
  <?php $header_text = ob_get_clean();
    return $header_text;
  }


  private function getAClass()
  {
    $a_class = ['class="nav-link "', 'class="nav-link active"', 'class="nav-link"'];
    return $a_class;
  }


  private function getContent($adherents)
  {
    ob_start(); ?>
    <div class="py-5">
      <div class="container my-5">
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
                  <td>' . $adherent['nom'] . '</td>
                  <td>' . $adherent['prenom'] . '</td>
                  <td>' . $adherent['tel'] . '</td>
                  <td>' . $adherent['mail'] . '</td>
                </tr>
                ';
                }
                // foreach ($adherents as $adherent) {
                //   echo '
                //       <tr>
                //         <td>' . $adherent->nom . '</td>
                //         <td>' . $adherent->prenom . '</td>
                //         <td>' . $adherent->tel . '</td>
                //         <td>' . $adherent->mail . '</td>
                //       </tr>
                //       ';
                // }
                ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>

<?php $content = ob_get_clean();

    return $content;
  }
}
?>