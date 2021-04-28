<?php

include "../config.php";


class Forum
{
   private $titre,$categorie,$post,$image,$id_client;

function __construct($titre,$categorie,$post,$image,$id_client)
 {
        $this->titre=$titre;
        $this->categorie=$categorie;
        $this->post=$post;
        $this->image=$image;
        $this->id_client=$id_client;      
    }
 public function get_titre() 
    {
        return $this->titre;
    }   
    public function get_categorie() 
    {
        return $this->categorie;
    }   
    public function get_pub() 
    {
        return $this->pub;
    }   
    public function get_image()
    {
        return $this->image;
    }
    public function get_id_client() 
    {
        return $this->id_client;
    }   

}

class Commentaire
{
   private $commentaire;

function __construct($commentaire)
 {
        $this->commentaire=$commentaire;        
    }
 public function get_commentaire() 
    {
        return $this->commentaire;
    }   
 }










?>