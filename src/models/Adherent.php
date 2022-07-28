<?php

namespace Models\Adherent;

require_once('AdherentRepository.php');

class Adherent
{
  public string $nom;
  public string $prenom;
  public string $tel;
  public string $mail;
  public string $date_debut;

  public function __construct($nom, $prenom, $tel, $mail, $date_debut)
  {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->tel = $tel;
    $this->mail = $mail;
    $this->date_debut = $date_debut;
  }

  public function getNom()
  {
    return $this->nom;
  }
  public function getPrenom()
  {
    return $this->prenom;
  }
  public function getTel()
  {
    return $this->tel;
  }
  public function getMail()
  {
    return $this->mail;
  }
  public function getDateDebut()
  {
    return $this->date_debut;
  }
}
