<?php
class Client
{
    private ?int $id_client = null;
    private string $nom_client;
    private string $prenom_client;
    private string $date_naissance;
    private string $telephone_client;
    private string $email_client;
    private string $login_client;
    private string $mot_passe;

    public function __construct($nom_client,$prenom_client, $date_naissance,$telephone_client,$email_client,$login_client,$mot_passe)
    {
        $this->nom_client =$nom_client;
        $this->prenom_client = $prenom_client;
        $this->date_naissance = $date_naissance;
        $this->telephone_client=$telephone_client;
        $this->email_client=$email_client;
        $this->login_client=$login_client;
        $this->mot_passe=$mot_passe;

    }
    public function getidClient () {
        return $this->id_client;
    }

    public function getnomclient (){
        return $this->nom_client ;
    } 
    public function getprenomclient (){
        return $this->prenom_client ;
    }

    public function getdatenaissance (){
        return $this->date_naissance;
    }

    public function gettelephoneclient(){
        return $this->telephone_client ;
    } 
    public function getemailclient(){
        return $this->email_client ;
    }
    public function getloginclient(){
        return $this->login_client ;
    }
    public function getmotpasseclient(){
        return $this->mot_passe;
    }
  


    public function setnomclient ($nom_client){
        $this->nom_client = $nom_client;
    }

    public function setprenomclient ($prenom_client){
        $this->prenom_client = $prenom_client;
    }

    public function setdatenaissance ($date_naissance){
        $this->date_naissance = $date_naissance;
    } 
    public function settelephoneclient($telephone_client){
        $this->telephone_client= $telephone_client;
    } 
    public function setemailclient(){
        $this->email_client=$email_client;
    }
    public function setloginclient(){
        $this->login_client =$login_client ;
    }
    public function setmotpasseclient(){
        $this->mot_passe=$mot_passe;
    }
}
?>