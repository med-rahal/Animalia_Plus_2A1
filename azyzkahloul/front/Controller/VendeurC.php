<?PHP
	include '../config.php';
	include '../Model/Vendeur.php';

	class VendeurC {
		
		function ajoutervendeur($vendeur){
			$sql="INSERT INTO vendeur (nom_vendeur, prenom_vendeur, date_naissance, telephone_vendeur,login_vendeur,mot_passe) 
			VALUES (:nom_vendeur, :prenom_vendeur, :date_naissance, :telephone_vendeur, :login_vendeur, :mot_passe)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom_vendeur' => $vendeur->getnomvendeur(),
					'prenom_vendeur' => $vendeur->getprenomvendeur(),
					'date_naissance' => $vendeur->getdatenaissance(),
					'telephone_vendeur' => $vendeur->gettelephonevendeur(),
					'login_vendeur' => $vendeur->getloginvendeur(),
					'mot_passe' => $vendeur->getmotpassevendeur()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function affichervendeur(){
			
			$sql="SELECT * FROM vendeur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerVendeur($id_vendeur){
			$sql="DELETE FROM vendeur WHERE id_vendeur= :id_vendeur";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_vendeur',$id_vendeur);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierVendeur($vendeur, $id_vendeur){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE vendeur SET 
						nom_vendeur = :nom_vendeur, 
						prenom_vendeur = :prenom_vendeur,
						date_naissance = :date_naissance,
						telephone_vendeur = :telephone_vendeur,
						login_vendeur= :login_vendeur,
						mot_passe = :mot_passe
					WHERE id_vendeur = :id_vendeur'
				);
				$query->execute([
					'nom_vendeur' => $vendeur->getnomvendeur(),
					'prenom_vendeur' => $vendeur->getprenomvendeur(),
					'date_naissance' => $vendeur->getdatenaissance(),
					'telephone_vendeur' => $vendeur->gettelephonevendeur(),
					'login_vendeur' => $vendeur->getloginvendeur(),
					'mot_passe' => $vendeur->getmotpassevendeur(),               
					'id_vendeur' => $id_vendeur
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		} 
	
		function recupererVendeur($id_vendeur){
			$sql="SELECT * from vendeur where id_vendeur=$id_vendeur";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererVendeur1($id_vendeur){
			$sql="SELECT * from vendeur where id_vendeur=$id_vendeur";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>