<?PHP
include "../config.php";
class ReclamationC {
function afficherReclamation ($reclamation){
		echo "type: ".$reclamation->gettype()."<br>";
		echo "description: ".$reclamation->getdescription()."<br>";
		echo "date_creation: ".$reclamation->getDate_creation()."<br>";
		echo "etat: ".$reclamation->getEtat()."<br>";
		echo "reponse: ".$reclamation->getReponse()."<br>";
		echo "mail : ".$reclamation->getmail()."<br>";
	}
	function ajouterReclamation($reclamation){

    $sql = "insert into reclamation (description,date_creation,etat,reponse,mail,descri) values (:description,:date_creation,:reponse,:etat,:mail,:descri)";

    

    $db = config::getConnexion();
    try{

        $req = $db->prepare($sql);
        

        $type = $reclamation->gettype();
        $description = $reclamation->getdescription();
        $date_creation = $reclamation->getDate_creation();
        $etat = $reclamation->getEtat();
        $reponse = $reclamation->getReponse();
		$mail=$reclamation->getmail();

        $req->bindValue(':description',$description);
        $req->bindValue(':date_creation',$date_creation);
        $req->bindValue(':etat',$etat);
        $req->bindValue(':reponse',$reponse);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':descri',$type);

       
       

        $req->execute();
        

    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
	

}

	
	function afficherReclamations(){
		$sql="SELECT * from reclamation ";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function trierreclamationstype(){
		$sql="SELECT * from reclamation left join type_reclamation on reclamation.date_creation=type_reclamation.date_creation order by type_reclamation.type";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function trierreclamations($index){
		$sql="SELECT * from reclamation  order by reclamation.$index ";

		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function id_grand(){
		$sql="SElECT MAX(id) From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherReclamationsuser($user){
		//$sql="SElECT * From reclamation WHERE utilisateur='$user'";
		$sql="SELECT  from reclamation inner join type_reclamation on reclamation.date_creation=type_reclamation.date_creation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($date_creation){
		$sql="DELETE  reclamation FROM reclamation  WHERE reclamation.date_creation =:date_creation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':date_creation',$date_creation);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation,$ddc){
		
		$sql="UPDATE reclamation SET reclamation.descri=:type,reclamation.description=:description,reclamation.etat=:etat,reclamation.reponse=:reponse WHERE reclamation.date_creation=:ddc";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $type=$reclamation->gettype();
        $description=$reclamation->getdescription();
        $etat=$reclamation->getEtat();
        $reponse=$reclamation->getReponse();
		$req->bindValue(':type',$type);
		$req->bindValue(':description',$description);
		$req->bindValue(':ddc',$ddc);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':reponse',$reponse);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  //print_r($datas);
        }
		
	}
	function modifierReclamationadmin($reclamation,$ddc){
		
		$sql="UPDATE reclamation SET reclamation.descri=:type,reclamation.description=:description,reclamation.etat=:etat,reclamation.reponse=:reponse WHERE type_reclamation.date_creation=:ddc ";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
        $type=$reclamation->gettype();
        $description=$reclamation->getdescription();
        $etat=$reclamation->getEtat();
        $reponse=$reclamation->getReponse();
		$req->bindValue(':type',$type);
		$req->bindValue(':descri',$type);

		$req->bindValue(':description',$description);
		$req->bindValue(':ddc',$ddc);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':reponse',$reponse);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  //print_r($datas);
        }
		
	}
	function recupererReclamation($date_creation){
		$sql="SELECT * from reclamation where reclamation.date_creation='$date_creation'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererReclamationadmin($date_creation){
		$sql="SELECT * from reclamation where reclamation.date_creation='$date_creation'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function calculerReclamation($probleme){
		$sql="SELECT * FROM reclamation where probleme='$probleme'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		$nombre=$liste->rowCount();
		return $nombre;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
	function rechercherreclamations($index){
		$sql="SELECT * from reclamation where reclamation.date_creation='$index' or reclamation.etat='$index' or reclamation.descri='$index' ";
		$db = config::getConnexion();
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