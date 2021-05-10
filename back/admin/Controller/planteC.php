<?PHP
	include "../config.php";
	require_once '../Model/plante.php';

	class planteC {
		
		function ajouterplante($plante){
			$sql="INSERT INTO plante (nom_categorie, nom_plante, prix, date_plante, image, id_client) 
			VALUES (:nom_categorie,:nom_plante,:prix, :date_plante, :image, :id_client)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_categorie' => $plante->getnom_categorie(),
					'nom_plante' => $plante->getnom_plante(),
					'prix' => $plante->getprix(),
					'date_plante' => $plante->getdate_plante(),
					'image' => $plante->getimage(),
					'id_client' => $plante->getid_client(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherplante(){
			
			$sql="SELECT * FROM plante";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerplante($ref_plante){
			$sql="DELETE FROM plante WHERE ref_plante= :ref_plante";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ref_plante',$ref_plante);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierplante($plante, $ref_plante){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE plante SET 
						nom_categorie = :nom_categorie, 
						nom_plante = :nom_plante,
						prix = :prix,
						date_plante = :date_plante,
						image = :image,
						id_client = :id_client
					WHERE ref_plante = :ref_plante'
				);
				$query->execute([
					'nom_categorie' => $plante->getnom_categorie(),
					'nom_plante' => $plante->getnom_plante(),
					'prix' => $plante->getprix(),
					'date_plante' => $plante->getdate_plante(),
					'image' => $plante->getimage(),
					'id_client' => $plante->getid_client(),
					'ref_plante' => $ref_plante
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererplante($ref_plante){
			$sql="SELECT * from plante where ref_plante=$ref_plante";
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

		function recupererplante1($ref_plante){
			$sql="SELECT * from plante where ref_plante=$ref_plante";
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
		public function getplanteByTitle($nom_plante) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'SELECT * FROM plante WHERE nom_plante = :nom_plante'
                );
                $query->execute([
                    'nom_plante' => $nom_plante
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
		
	}

?>