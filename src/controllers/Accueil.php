<?php

namespace Controllers\Accueil;

require_once('views/Accueil.php');

use Accueil;

function accueil()
{
  $vue = new Accueil();
  $modelBasic = $vue->getModelBasic();
  require_once('views/layoutModel.php');
}
