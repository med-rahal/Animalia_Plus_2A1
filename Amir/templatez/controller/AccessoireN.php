<?PHP
	include "../config.php";
	require_once '../Model/Accessoire.php';

	class AccessoireN {
		
		function ajouterAccessoire($accessoire){
			$sql="INSERT INTO accessoire (nom_accessoire, ref_accessoire, categorie_accessoire, type, prix, image) 
			VALUES (:nom_accessoire,:ref_accessoire,:categorie_accessoire, :type, :prix, :image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_accessoire' => $accessoire->getNom(),
					'ref_accessoire' => $accessoire->getRef(),
					'categorie_accessoire' => $accessoire->getCat(),
					'type' => $accessoire->getType(),
					'prix' => $accessoire->getPrix(),
					'image' => $accessoire->getImage()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherAccessoire(){
			
			$sql="SELECT * FROM accessoire";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerAccessoire($id_accessoire){
			$sql="DELETE FROM accessoire WHERE id_accessoire= :id_accessoire";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_accessoire',$id_accessoire);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierAccessoire($accessoire, $id_accessoire){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE accessoire SET 
						nom_accessoire = :nom_accessoire, 
						ref_accessoire = :ref_accessoire,
						categorie_accessoire = :categorie_accessoire,
						type = :type,
						prix = :prix,
						image = :image
					WHERE id_accessoire = :id_accessoire'
				);
				$query->execute([
					'nom_accessoire' => $accessoire->getNom(),
					'ref_accessoire' => $accessoire->getRef(),
					'categorie_accessoire' => $accessoire->getCat(),
					'type' => $accessoire->getType(),
					'prix' => $accessoire->getPrix(),
					'image' => $accessoire->getImage(),
					'id_accessoire' => $id_accessoire
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererAccessoire($id_accessoire){
			$sql="SELECT * from accessoire where id_accessoire=$id_accessoire";
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

		function recupererAccessoire1($id_accessoire){
			$sql="SELECT * from accessoire where id_accessoire=$id_accessoire";
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