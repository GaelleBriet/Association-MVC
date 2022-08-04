<?php

require_once('ModelBasic.php');

class Connexion
{
  public function getModelBasic()
  {
    $title = "ACAA - Connexion";
    $header_style = "background-image: url('./assets/img/chat-bebe.jpg'); height:400px; background-position: 50% 50%;";
    $header_text = $this->getHeaderText();
    $a_class = $this->getAClass();
    $content = $this->getContent();

    $modelBasic = new ModelBasic($title, $header_style, $header_text, $a_class, $content);
    return $modelBasic;
  }


  private function getHeaderText()
  {
    ob_start(); ?>
    <h1 class="text-white fs-3 fw-bolder"></h1>
    <p class="text-white-50 mb-0"></p>
  <?php $header_text = ob_get_clean();
    return $header_text;
  }

  private function getAClass()
  {
    $a_class = ['class="nav-link"', 'class="nav-link"', 'class="nav-link active"'];
    return $a_class;
  }

  private function getContent()
  {
    ob_start(); ?>

    <section class="gradient-custom">
      <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <form action="index.php?action=login" method="post" class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2 text-uppercase">Connexion</h2>
                  <p class="text-white-50 mb-5">Entrez votre identifiant et votre mot de passe</p>

                  <div class="form-outline form-white mb-4">
                    <input type="email" name="email" id="email" class="form-control form-control-lg" />
                    <label class="form-label" for="email">E-mail</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" name="password" id="password" class="form-control form-control-lg" />
                    <label class="form-label" for="password">Mot de passe</label>
                  </div>

                  <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->

                  <input class="btn btn-outline-light btn-lg px-5" type="submit" value="Se connecter">

                </form>

                <div>
                  <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                  </p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php $content = ob_get_clean();
    return $content;
  }
}
