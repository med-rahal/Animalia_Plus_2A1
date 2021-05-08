<?PHP
	include "../config.php";
	require_once '../Model/CategorieAlim.php';

	class CategorieN {
		
		function ajouterCategorie($categorie){
			$sql="INSERT INTO categorie_alimTAB (nom_categorie, description) 
			VALUES (:nom_categorie,:description)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_categorie' => $categorie->getNom(),
					'description' => $categorie->getDes()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherCategorie(){
			
			$sql="SELECT * FROM categorie_alimTAB";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerCategorie($id_categorie){
			$sql="DELETE FROM categorie_alimTAB WHERE id_categorie= :id_categorie";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_categorie',$id_categorie);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierCategorie($categorie, $id_categorie){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categorie_alimTAB SET 
						nom_categorie = :nom_categorie, 
						description = :description
						
					WHERE id_categorie = :id_categorie'
				);
				$query->execute([
					'nom_categorie' => $categorie->getNom(),
					'description' => $categorie->getDes(),
					
					'id_categorie' => $id_categorie
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recuperercategorie($id_categorie){
			$sql="SELECT * from categorie_alimTAB where id_categorie=$id_categorie";
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

		function recuperercategorie1($id_categorie){
			$sql="SELECT * from categorie_alimTAB where id_categorie=$id_categorie";
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