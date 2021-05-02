<?php
class Admin
{
    private ?int $id_admin = null;
    private string $nom_administrateur;
    private string $mot_passe;
    public function __construct($nom_administrateur,$mot_passe)
    {
        $this->nom_administrateur=$nom_administrateur;
        $this->mot_passe = $mot_passe;

    }
    public function getidadmin () {
        return $this->id_admin;
    }

    public function getnomadmin(){
        return $this->nom_administrateur ;
    } 
    public function getmotpasseadmin(){
        return $this->mot_passe;
    }
  
    public function setnomadmin ($nom_administrateur){
        $this->nom_administrateur = $nom_administrateur;
    }
    public function setmotpasseadmin($mot_passe){
        $this->mot_passe=$mot_passe;
    }
}
?>