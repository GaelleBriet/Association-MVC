<?php

namespace Controllers\CntrlAdherent;

use addAdherent;
use EditAdherent;
use ListeAdherents;
use Models\Adherent\Adherent;
use Models\AdherentRepository\AdherentRepository;
use Models\Adhesion\Adhesion;

require_once('views/EditAdherent.php');
require_once('views/AddAdherent.php');
require_once('views/ListeAdherents.php');
require_once('src/models/Adherent.php');
require_once('src/models/Adhesion.php');
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

  //créé un adhérent
  public function execute()
  {
    // récupère les données du formulaire
    $adherent = $this->getDataForm();
    // traitement
    $adherentRepository = new AdherentRepository();
    // affecte les données du tableau adherent (formulaire) à l'objet monadherent
    $monadherent = new Adherent($adherent['nom'], $adherent['prenom'], $adherent['tel'], $adherent['mail'], $adherent['date_debut']);
    $id_nouvel_adherent = $adherentRepository->addAdherent($monadherent);

    $monadhesion = new Adhesion($adherent['date_debut'], $adherent['date_fin'], $adherent['tarif'], $id_nouvel_adherent);
    $success = $adherentRepository->addAddhesion($monadhesion);

    //appel de la vue
    if (!$id_nouvel_adherent || !$success) {
      throw new \Exception('Impossible de créer le nouvel adhérent.');
    } else {
      header('Location: index.php?action=add-adherent-reussite');
    }
  }


  // modifie les données de l'adhérent
  public function update()
  {
    $adherent = $this->getDataForm();
    // traitement
    $adherentRepository = new AdherentRepository();
    $success = $adherentRepository->updateAdherent($adherent);
    $success2 = $adherentRepository->updateAdhesion($adherent);
    //appel de la vue
    if (!$success || !$success2) {
      throw new \Exception('Impossible de modifier l\'adhérent.');
    } else {
      header('Location: index.php?action=liste-adherents');
    }
  }

  // récupère les données du formulaire
  private function getDataForm()
  {
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail'])) {
      foreach ($_POST as $key => $value) {
        $adherent[$key] = $value;
      }
      // si date de renouvellement existe -> ajoute 365jours pour date de fin
      if (isset($adherent['date_renouv'])) {
        $oldDate = $adherent['date_renouv'];
        $newDate = new \DateTime($oldDate);
        $newDate->add(new \DateInterval('P365D'));
        $formatDate = $newDate->format('Y-m-d');
        $adherent['date_fin'] = $formatDate;
        // sinon si date de debut existe -> ajoute 365jours pour date de fin 
      } elseif (isset($adherent['date_debut']) and !empty($adherent['date_debut'])) {
        $oldDate = $adherent['date_debut'];
        $newDate = new \DateTime($oldDate);
        $newDate->add(new \DateInterval('P365D'));
        $formatDate = $newDate->format('Y-m-d');
        $adherent['date_fin'] = $formatDate;
      }
      $adherent['tarif'] = '10';
      //appel de la fonction qui enlève les signes dans le numéro de tel
      $adherent['tel'] = $this->concatTel($adherent['tel']);

      return $adherent;
    }
  }

  private function concatTel($tel)
  { //fonction qui envoie en bdd le téléphone sans les signes ./-,
    $telSeparators = array("/", ".", "-", ",", " ");
    $tel = str_replace($telSeparators, "", $tel);
    return $tel;
  }


  // affiche les adhérents sous forme de tableau
  public function listeAdherents()
  {
    $adherentRepository = new AdherentRepository;
    // récupère les adhérents dont l'adhésion termine dans + 30 jours
    $adherents = $adherentRepository->getAllAdherents();
    // récupère les adhérents dont l'adhésion termine dans - 30 jours
    $old_adherents = $adherentRepository->getOldAdherents();
    //appel de la vue
    $vue = new ListeAdherents();
    $modelBasic = $vue->getModelBasic($adherents, $old_adherents);
    require_once('views/layoutModel.php');
  }

  // affiche la page d'édition
  public function editAdherent()
  {
    //traitement
    $adherentRepository = new AdherentRepository;
    $adherent = $adherentRepository->getSelectedAdherent();
    // appel de la vue
    $vue = new EditAdherent();
    $modelBasic = $vue->getModelBasic($adherent);
    require_once('views/layoutModel.php');
  }
}
