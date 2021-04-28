<?php 
 
 include "../Model/Forum.php";
   

class ForumC
{
public function ajouterPublication($pub) 
    {
        $db=config::getConnexion();
        
        $req="INSERT INTO `publication`(`titre`, `categorie`, `publication`, `image`, `date_publication`, `id_client`) VALUES (:titre,:categorie,:publication,:image,now(),:'id_client')";
        $id=$pub->get_id_client();
        $sql=$db->prepare($req);
        
        $sql->bindValue(':titre',$pub->get_titre());
        $sql->bindValue(':categorie',$pub->get_categorie());
        $sql->bindValue(':publication',$pub->get_pub());
        $sql->bindValue(':image',$pub->get_image());
        $sql->bindValue(':id_client',$pub->get_id_client());
      
         if($sql->execute())
         {
          $last_id = $db->lastInsertId();
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum_contenu.php?id=".$last_id."\">"; 
               }
            else
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=ajouter_publication.php\">"; 	
       
    } 
  
    public function ajouterCommentaire($commentaire,$id_client,$id_pub,$nom) 
    {
        $db=config::getConnexion();
        
        $req="INSERT INTO `commentaire`( `nom`,`commentaire`, `date_com`, `id_client`, `id_publication`) VALUES ('$nom',:commentaire,now(),$id_client,$id_pub)";
       
        $sql=$db->prepare($req);
        
        $sql->bindValue(':commentaire',$commentaire->get_commentaire());

      
         if($sql->execute())
         {
                echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum_contenu.php?id=".$id_pub."\">"; 
         }
            else
                  echo "<meta http-equiv=\"refresh\" content=\"0;URL=login_client.php\">"; 
        
       
    } 
     public function afficherPublication()
    {
        $db=config::getConnexion();
        $result ="SELECT * FROM publication";
        $sql=$db->query($result);
        return $sql;
    }
    public function maxPublication()
    {
        $db=config::getConnexion();
        $result ="SELECT max(id) as max_publication FROM publication";
        $sql=$db->query($result);
        return $sql;
       
    }
      public function minPublication()
    {
        $db=config::getConnexion();
        $result ="SELECT min(id) as min_publication FROM publication";
        $sql=$db->query($result);
        return $sql;
       
    }
    function recupererCommentaire($id_pub)
    {
        $db = config::getConnexion();
        $sql="SELECT * from commentaire where id_publication=$id_pub";
        
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
      public function supprimerPublication($id)
    {
        $db=config::getConnexion();
        $sql=$db->prepare("DELETE FROM publication WHERE id= $id");
        if($sql->execute())
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum.php\">"; 
            else
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum.php\">"; 

    }
     public function supprimerComment($id,$id_pub)
    {
         $db=config::getConnexion();
        $sql=$db->prepare("DELETE FROM commentaire WHERE id= $id");
        if($sql->execute())
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum_contenu.php?id=".$id_post."\">"; 

    }
public function modifierPost($pub,$id_pub)
    {
       
        
        $db=config::getConnexion();
        
        $req="UPDATE `publication` SET `titre`=:titre,`categorie`=:categorie,`post`=:post,`date_post`=now() WHERE id=$id_pub";

         $sql=$db->prepare($req);
         $sql->bindValue(':titre',$pub->get_titre());
        $sql->bindValue(':categorie',$pub->get_categorie());
        $sql->bindValue(':publication',$pub->get_post());
  
      if($sql->execute())
                 echo "<meta http-equiv=\"refresh\" content=\"0;URL=forum_contenu.php?id=".$id_pub."\">"; 
           
        
    }
    function recupererPublication($id)
    {
        $db = config::getConnexion();
        $sql="SELECT * from publication where id=$id";
        
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}

?>