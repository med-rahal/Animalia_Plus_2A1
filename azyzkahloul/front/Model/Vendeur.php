<?php
class Vendeur
{
    private ?int $id_vendeur = null;
    private string $nom_vendeur;
    private string $prenom_vendeur;
    private string $date_naissance;
    private string $telephone_vendeur;
    private string $login_vendeur;
    private string $mot_passe;

    public function __construct($nom_vendeur,$prenom_vendeur, $date_naissance,$telephone_vendeur,$login_vendeur,$mot_passe)
    {
        $this->nom_vendeur =$nom_vendeur;
        $this->prenom_client = $prenom_client;
        $this->date_naissance = $date_naissance;
        $this->telephone_vendeur=$telephone_vendeur;
        $this->login_vendeur=$login_vendeur;
        $this->mot_passe=$mot_passe;

    }
    public function getidvendeur () {
        return $this->id_vendeur;
    }

    public function getnomvendeur (){
        return $this->nom_vendeur ;
    } 
    public function getprenomvendeur (){
        return $this->prenom_vendeur ;
    }

    public function getdatenaissance (){
        return $this->date_naissance;
    }

    public function gettelephonevendeur(){
        return $this->telephone_vendeur ;
    } 
  
    public function getloginvendeur(){
        return $this->login_vendeur;
    }
    public function getmotpassevendeur(){
        return $this->mot_passe;
    }
  


    public function setnomvendeur ($nom_vendeur){
        $this->nom_vendeur = $nom_vendeur;
    }

    public function setprenomvendeur ($prenom_vendeur){
        $this->prenom_vendeur = $prenom_vendeur;
    }

    public function setdatenaissance ($date_naissance){
        $this->date_naissance = $date_naissance;
    } 
    public function settelephonevendeur($telephone_vendeur){
        $this->telephone_vendeur= $telephone_vendeur;
    } 
    public function setloginvendeur(){
        $this->login_vendeur =$login_vendeur ;
    }
    public function setmotpassevendeur(){
        $this->mot_passe=$mot_passe;
    }
}
?>