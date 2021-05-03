<?php
  class Database {
    private static $cont = NULL;

    public static function connect() {
      if (!isset(self::$cont)) {
        try{
          self::$cont = new PDO('mysql:host=localhost;dbname=test123', 'root', '',
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
          
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage());
        }
      }
      return self::$cont;
    }
  }
?>
