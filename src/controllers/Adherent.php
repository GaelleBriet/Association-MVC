<?php

namespace Controllers\Adherent;

use Lib\Database\DatabaseConnection;
use Models\Adherent\AdherentRepository;

require_once('src/lib/Database.php');
require_once('src/models/Adherent.php');

//fonction adherent : redirige vers le template de la page liste des adhérents
function adherent()
{
  $adherentRepository = new AdherentRepository();
  $adherentRepository->connection = new DatabaseConnection();
  $adherents = $adherentRepository->getAllAdherents(); //fonction qui récupère la liste des adhérents dans la bdd

  require_once('views/adherent.php');
}
