<?php

require_once('ModelBasic.php');

class Accueil
{
  public function getModelBasic()
  {
    $title = "Aide Cavaillonaise Aux Animaux";
    $header_style = "background-image: url('./assets/img/chat-profil.jpg'); height:435px; background-position: 50% 45%;";
    $header_text = $this->getHeaderText();
    $a_class = $this->getAClass();
    $content = $this->getContent();

    $modelBasic = new ModelBasic($title, $header_style, $header_text, $a_class, $content);
    return $modelBasic;
  }


  private function getHeaderText()
  {
    ob_start(); ?>
    <h1 class="text-white fs-3 fw-bolder">Aide Cavaillonaise Aux Animaux</h1>
    <p class="text-white-50 mb-0">Bienvenue sur notre site</p>
  <?php $header_text = ob_get_clean();
    return $header_text;
  }

  private function getAClass()
  {
    $a_class = ['class="nav-link active"', 'class="nav-link"', 'class="nav-link"'];
    return $a_class;
  }

  private function getContent()
  {
    ob_start(); ?>
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
    <div class="py-5 bg-image-full" style="background-image: url('./assets/img/chat-eau.jpg'); background-position: 50% 30%;">
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
<?php $content = ob_get_clean();
    return $content;
  }
}


?>