<?PHP
	include '../config.php';
	include '../Model/Admin.php';

	class AdminC {
		
		function ajouteradministrateur($administrateur){
			$sql="INSERT INTO administrateur (nom_administrateur, mot_passe)
			VALUES (:nom_administrateur, :mot_passe)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_administrateur' => $administrateur->getnomadmin(),
					'mot_passe' => $administrateur->getmotpasseadmin()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficheradministrateur(){
			
			$sql="SELECT * FROM administrateur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimeradministrateur($id_admin){
			$sql="DELETE FROM administrateur WHERE id_admin= :id_admin";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_admin',$id_admin);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifieradministrateur($administrateur, $id_admin){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE administrateur SET 
						nom_administrateur = :nom_administrateur, 
						mot_passe = :mot_passe,
					WHERE id_admin = :id_admin'
				);
				$query->execute([
					'nom_administrateur' => $administrateur->getnomadmin(),
					'mot_passe' => $administrateur->getmotpasseadmin(),    
					'id_admin' => $id_admin
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererAdmin($id_admin){
			$sql="SELECT * from administrateur where id_admin=$id_admin";
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

		function recupererAdmin1($id_admin){
			$sql="SELECT * from administrateur where id_admin=$id_admin";
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