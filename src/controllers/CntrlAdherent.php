<?php

namespace Controllers\CntrlAdherent;

use addAdherent;
use ListeAdherents;
use Models\Adherent\Adherent;
use Models\AdherentRepository\AdherentRepository;

require_once('views/AddAdherent.php');
require_once('views/ListeAdherents.php');
require_once('src/models/Adherent.php');
require_once('src/models/AdherentRepository.php');

class CntrlAdherent
{
  //redirige vers le template de la page d'ajout d'un nouvel adhérent
  public function addAdherent()
  {
    $vue = new AddAdherent();
    $modelBasic = $vue->getModelBasic();
    require_once('views/layoutModel.php');
  }

  //redirige vers le template de la page d'ajout d'un nouvel adhérent avec message de réussite
  public function addAdherentReussite()
  {
    echo '
    <div class="alert alert-success translate-middle" role="alert" style="position: absolute; top: 41%; left: 50%; ">
    Création de l\'adhérent réussie!
    </div>
    ';
    $vue = new AddAdherent();
    $modelBasic = $vue->getModelBasic();
    require_once('views/layoutModel.php');
  }

  //ajoute les données du formulaire dans la table adhérent
  public function execute($input)
  {
    $adherent = $this->getDataForm($input);
    // traitement
    $adherentRepository = new AdherentRepository();
    $success = $adherentRepository->addAdherent($adherent);
    //appel de la vue
    if (!$success) {
      throw new \Exception('Impossible de créer le nouvel adhérent.');
    } else {
      header('Location: index.php?action=add-adherent-reussite');
    }
  }

  private function getDataForm($input)
  {
    //recuperation et verification des donnees
    if (!empty($input['nom']) && !empty($input['prenom']) && !empty($input['mail'])) {
      $nom = $input['nom'];
      $prenom = $input['prenom'];
      $tel = $input['tel'];
      $mail = $input['mail'];
      $date_debut = $input['date_debut'];
      $adherent = new Adherent($nom, $prenom, $tel, $mail, $date_debut);
    } else {
      throw new \Exception(('Données invalides'));
    }
    return $adherent;
  }

  public function listeAdherents()
  {
    $adherentRepository = new AdherentRepository;
    $adherents = $adherentRepository->getAllAdherents();
    $vue = new ListeAdherents();
    $modelBasic = $vue->getModelBasic($adherents);
    require_once('views/layoutModel.php');
  }
}
