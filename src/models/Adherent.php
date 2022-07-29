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
  /**
   * Get the value of nom
   */
  public function getNom()
  {
    return $this->nom;
  }
  /**
   * Get the value of prenom
   */
  public function getPrenom()
  {
    return $this->prenom;
  }
  /**
   * Get the value of tel
   */
  public function getTel()
  {
    return $this->tel;
  }
  /**
   * Get the value of mail
   */
  public function getMail()
  {
    return $this->mail;
  }
  /**
   * Get the value of date_debut
   */
  public function getDate_debut()
  {
    return $this->date_debut;
  }
  /**
   * Set the value of nom
   *
   * @return  self
   */
  public function setNom($nom)
  {
    $this->nom = $nom;

    return $this;
  }

  /**
   * Set the value of prenom
   *
   * @return  self
   */
  public function setPrenom($prenom)
  {
    $this->prenom = $prenom;

    return $this;
  }

  /**
   * Set the value of tel
   *
   * @return  self
   */
  public function setTel($tel)
  {
    $this->tel = $tel;

    return $this;
  }

  /**
   * Set the value of mail
   *
   * @return  self
   */
  public function setMail($mail)
  {
    $this->mail = $mail;

    return $this;
  }

  /**
   * Set the value of date_debut
   *
   * @return  self
   */
  public function setDate_debut($date_debut)
  {
    $this->date_debut = $date_debut;

    return $this;
  }
}
