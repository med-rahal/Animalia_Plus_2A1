<?PHP
	include "../config.php";
	require_once '../Model/categorie.php';

	class categorieC {
		
		function ajoutercategorie($categorie){
			$sql="INSERT INTO categories_plantes (nom_categorie, description, duree_vie) 
			VALUES (:nom_categorie, :description, :duree_vie)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_categorie' => $categorie->getnom_categorie(),
					'description' => $categorie->getdescription(),
					'duree_vie' => $categorie->getduree_vie(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function affichercategorie(){
			
			$sql="SELECT * FROM categories_plantes";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimercategorie($nom_categorie){
			$sql="DELETE FROM categories_plantes WHERE nom_categorie= :nom_categorie";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':nom_categorie',$nom_categorie);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function modifiercategorie($categorie, $nom_categorie){ // a revoire
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categories_plantes SET 
						nom_categorie = :nom_categorie, 
						description = :description,
						duree_vie = :duree_vie
					WHERE nom_categorie = :nom_categorie'
				);
				$query->execute([
					'nom_categorie' => $plante->getnom_categorie(),
					'description' => $plante->getdescription(),
					'duree_vie' => $plante->getduree_vie(),
					'nom_categorie' => $nom_categorie               // a revoire
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recuperercategorie($nom_categorie){
			$sql="SELECT * from categories_plantes where nom_categorie=$nom_categorie";
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

		function recuperercategorie1($nom_categorie){
			$sql="SELECT * from categories_plantes where nom_categorie=$nom_categorie";
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

		public function afficherplante($nom_categorie){
			try{
				$db = getConnexion();
				$query = $db->prepare(
					'SELECT * FROM plante WHERE nom_categorie = :nom_categorie'
				);
				$query->execute([
					'nom_categorie' => $nom_categorie
				]);
				return $query ->fetchAll();
			} catch (PDOException $e){
				$e ->getMessage();
			}
			
		}
		
	}

?>