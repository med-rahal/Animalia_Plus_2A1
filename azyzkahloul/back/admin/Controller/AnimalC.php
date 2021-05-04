<?PHP
	include "../config.php";
	require_once '../Model/Animal.php';

	class AnimalC {
		
		function ajouterAnimal($Animal){
			$sql="INSERT INTO animal (nom, prix, race, id_vendeur, categorie_animal) 
			VALUES (:nom,:prix,:race, :id_vendeur, :categorie_animal)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom' => $Animal->getNom(),
					'prix' => $Animal->getPrix(),
					'race' => $Animal->getRace(),
					'id_vendeur' => $Animal->getId_vendeur(),
					'categorie_animal' => $Animal->getCategorie_animal()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherAnimals(){
			
			$sql="SELECT * FROM animal";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerAnimal($id){
			$sql="DELETE FROM animal WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierAnimal($Animal, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE animal SET 
						nom = :nom, 
						prix = :prix,
						race = :race,
						id_vendeur = :id_vendeur,
						categorie_animal = :categorie_animal
					WHERE id = :id'
				);
				$query->execute([
					'nom' => $Animal->getNom(),
					'prix' => $Animal->getPrix(),
					'race' => $Animal->getRace(),
					'id_vendeur' => $Animal->getId_vendeur(),
					'categorie_animal' => $Animal->getCategorie_animal(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererAnimal($id){
			$sql="SELECT * from animal where id=$id";
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

		function recupererAnimal1($id){
			$sql="SELECT * from animal where id=$id";
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
		public function getAnimalByname($nom) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'SELECT * FROM animal WHERE nom = :nom'
                );
                $query->execute([
                    'nom' => $nom
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
		function trierAnimal(){

            $sql="SELECT * FROM animal order by nom";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        } 


        function trierAnimaldesc(){

            $sql="SELECT * FROM client order by prix desc";
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