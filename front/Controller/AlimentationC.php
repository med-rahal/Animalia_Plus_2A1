<?PHP
	include "../config.php";
	require_once '../Model/Alimentation.php';

	class AlimentationC {
		
		function ajouterAlimentation($alimentation){
			$sql="INSERT INTO alimentation (nom_alimentation, ref_alimentation, categorie_alimentation, type, prix, image) 
			VALUES (:nom_alimentation,:ref_alimentation,:categorie_alimentation, :type, :prix, :image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_alimentation' => $alimentation->getNom(),
					'ref_alimentation' => $alimentation->getRef(),
					'categorie_alimentation' => $alimentation->getCat(),
					'type' => $alimentation->getType(),
					'prix' => $alimentation->getPrix(),
					'image' => $alimentation->getImage()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherAlimentation(){
			
			$sql="SELECT * FROM alimentation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerAlimentation($id_alimentation){
			$sql="DELETE FROM alimentation WHERE id_alimentation= :id_alimentation";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_alimentation',$id_alimentation);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierAlimentation($alimentation, $id_alimentation){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE alimentation SET 
						nom_alimentation = :nom_alimentation, 
						ref_alimentation = :ref_alimentation,
						categorie_alimentation = :categorie_alimentation,
						type = :type,
						prix = :prix,
						image = :image
					WHERE id_alimentation = :id_alimentation'
				);
				$query->execute([
					'nom_alimentation' => $alimentation->getNom(),
					'ref_alimentation' => $alimentation->getRef(),
					'categorie_alimentation' => $alimentation->getCat(),
					'type' => $alimentation->getType(),
					'prix' => $alimentation->getPrix(),
					'image' => $alimentation->getImage(),
					'id_alimentation' => $id_alimentation
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererAlimentation($id_alimentation){
			$sql="SELECT * from alimentation where id_alimentation=$id_alimentation";
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

		function recupererAlimentation1($id_alimentation){
			$sql="SELECT * from alimentation where id_alimentation=$id_alimentation";
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