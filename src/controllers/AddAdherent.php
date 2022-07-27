<?php

namespace Controllers\AddAdherent;

use Lib\Database\DatabaseConnection;
use Models\Adherent\AdherentRepository;

use function Controllers\Adherent\adherent;

require_once('src/lib/Database.php');
require_once('src/models/Adherent.php');

class AddAdherent
{
  //fonction addAdhent() : redirige vers le template de la page d'ajout d'un nouvel adhérent
  public function addAdherent()
  {
    require_once('views/add_adherent.php');
  }

  public function addAdherentReussite()
  {
    echo '
    <div class="alert alert-success translate-middle" role="alert" style="position: absolute; top: 41%; left: 50%; ">
    Création de l\'adhérent réussie!
    </div>
    ';
    require_once('views/add_adherent.php');
  }

  //fonction execute() : ajoute les données des input dans la table adhérent
  public function execute($input)
  {
    if (!empty($input['nom']) && !empty($input['prenom']) && !empty($input['mail'])) {
      $nom = $input['nom'];
      $prenom = $input['prenom'];
      $tel = $input['tel'];
      $mail = $input['mail'];
      $date_debut = $input['date_debut'];
    } else {
      throw new \Exception(('Données invalides'));
    }
    $adherentRepository = new AdherentRepository();
    $adherentRepository->connection = new DatabaseConnection();
    $success = $adherentRepository->addAdherent($nom, $prenom, $tel, $mail, $date_debut);
    if (!$success) {
      throw new \Exception('Impossible de créer le nouvel adhérent.');
    } else {
      header('Location: index.php?action=add-adherent-reussite');
    }
    // } else {
    //   header('Location: index.php?action=liste-adherent's);
    // }
  }
}
