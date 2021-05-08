<?PHP
	include "../config.php";
	require_once '../Model/categorieanimal.php';

	class categorieanimalC {
		
		function ajoutercategorie($categorie){
			$sql="INSERT INTO categories_animaux (nom_categorie, description, duree_vie) 
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
			
			$sql="SELECT * FROM categories_animaux";
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
			$sql="DELETE FROM categories_animaux WHERE nom_categorie= :nom_categorie";
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
					'UPDATE categories_animaux SET 
						nom_categorie = :nom_categorie, 
						description = :description,
						duree_vie = :duree_vie
					WHERE id = :id'
				);
				$query->execute([
					'nom_categorie' => $categorie->getnom_categorie(),
					'description' => $categorie->getdescription(),
					'duree_vie' => $categorie->getduree_vie()
					               // a revoire
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recuperercategorie($id){
			$sql="SELECT * from categories_animaux where id=$id";
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
            $sql="SELECT * from categories_animaux where nom_categorie=$nom_categorie";
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
		public function getCategorieByname($nom_categorie) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'SELECT * FROM categories_animaux WHERE nom_categorie = :nom_categorie'
                );
                $query->execute([
                    'nom_categorie' => $nom_categorie
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
		function trierCategorie(){

            $sql="SELECT * FROM categories_animaux order by nom_categorie";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        } 


        function trierCategoriedesc(){

            $sql="SELECT * FROM categories_animaux order by duree_vie desc";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
		
	}

?>