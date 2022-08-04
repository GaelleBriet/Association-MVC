<?php

namespace Models\Adhesion;

require_once('AdherentRepository.php');

class Adhesion
{
  public string $date_debut;
  public string $date_fin;
  public string $tarif = '10';
  public string $id_adherent;


  public function __construct($date_debut, $date_fin, $tarif, $id_nouvel_adherent)
  {
    $this->date_debut = $date_debut;
    $this->date_fin = $date_fin;
    $this->tarif = $tarif;
    $this->id_adherent = $id_nouvel_adherent;
    // $this->id_adherent = $id_adherent;
  }

  // /**
  //  * Get the value of date_debut
  //  */
  // public function getDate_debut()
  // {
  //   return $this->date_debut;
  // }

  // /**
  //  * Set the value of date_debut
  //  *
  //  * @return  self
  //  */
  // public function setDate_debut($date_debut)
  // {
  //   $this->date_debut = $date_debut;

  //   return $this;
  // }

  // /**
  //  * Get the value of date_fin
  //  */
  // public function getDate_fin()
  // {
  //   return $this->date_fin;
  // }

  // /**
  //  * Set the value of date_fin
  //  *
  //  * @return  self
  //  */
  // public function setDate_fin($date_fin)
  // {
  //   $this->date_fin = $date_fin;

  //   return $this;
  // }
}
