<?php

namespace Esprit\PatisserieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=25, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="cin_utilisateur", type="integer", nullable=false)
     */
    private $cinUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_utilisateur", type="string", length=100, nullable=false)
     */
    private $nomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_utilisateur", type="string", length=20, nullable=false)
     */
    private $prenomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=100, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=20, nullable=false)
     */
    private $motDePasse;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_utilisateur", type="string", length=40, nullable=false)
     */
    private $adresseUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=20, nullable=false)
     */
    private $telephone;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="valide", type="integer", nullable=false)
     */
    private $valide = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="num_carte_bancaire", type="string", length=30, nullable=true)
     */
    private $numCarteBancaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscri", type="date", nullable=true)
     */
    private $dateInscri;
    function getIdUtilisateur() {
        return $this->idUtilisateur;
    }

    function getType() {
        return $this->type;
    }

    function getCinUtilisateur() {
        return $this->cinUtilisateur;
    }

    function getNomUtilisateur() {
        return $this->nomUtilisateur;
    }

    function getPrenomUtilisateur() {
        return $this->prenomUtilisateur;
    }

    function getEmail() {
        return $this->email;
    }

    function getLogin() {
        return $this->login;
    }

    function getMotDePasse() {
        return $this->motDePasse;
    }

    function getAdresseUtilisateur() {
        return $this->adresseUtilisateur;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getEtat() {
        return $this->etat;
    }

    function getValide() {
        return $this->valide;
    }

    function getNumCarteBancaire() {
        return $this->numCarteBancaire;
    }

    function getDateInscri() {
        return $this->dateInscri;
    }

    function setIdUtilisateur($idUtilisateur) {
        $this->idUtilisateur = $idUtilisateur;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setCinUtilisateur($cinUtilisateur) {
        $this->cinUtilisateur = $cinUtilisateur;
    }

    function setNomUtilisateur($nomUtilisateur) {
        $this->nomUtilisateur = $nomUtilisateur;
    }

    function setPrenomUtilisateur($prenomUtilisateur) {
        $this->prenomUtilisateur = $prenomUtilisateur;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setMotDePasse($motDePasse) {
        $this->motDePasse = $motDePasse;
    }

    function setAdresseUtilisateur($adresseUtilisateur) {
        $this->adresseUtilisateur = $adresseUtilisateur;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setValide($valide) {
        $this->valide = $valide;
    }

    function setNumCarteBancaire($numCarteBancaire) {
        $this->numCarteBancaire = $numCarteBancaire;
    }

    function setDateInscri(\DateTime $dateInscri) {
        $this->dateInscri = $dateInscri;
    }
    function __toString(){
       
       return "utilisateur: cin: ".$this->cinUtilisateur."  nom: ".$this->nomUtilisateur."  prenom: ".$this->prenomUtilisateur."  login: ".$this->login
               ."  mdp: ".$this->motDePasse;
   }
   

}
