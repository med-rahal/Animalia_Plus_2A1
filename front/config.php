<?php 

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';





  class config 
  {
    private static $pdo = NULL; 

    public static function getConnexion() 
    {
      if (!isset(self::$pdo)) {
        try{
          self::$pdo = new PDO('mysql:host=localhost;dbname=animalia_plus', 'root','',
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
           # echo "connected successfully";
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }
  }
?>
