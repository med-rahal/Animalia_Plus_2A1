<?PHP
	include '../config.php';
	include '../Model/client.php';

	class ClientC {
		
		function ajouterclient($client){
			$sql="INSERT INTO client (nom_client, prenom_client, date_naissance, telephone_client, email_client,login_client,mot_passe,id_admin) 
			VALUES (:nom_client, :prenom_client, :date_naissance, :telephone_client, :email_client, :login_client, :mot_passe, :id_admin)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom_client' => $client->getnomclient(),
					'prenom_client' => $client->getprenomclient(),
					'date_naissance' => $client->getdatenaissance(),
					'telephone_client' => $client->gettelephoneclient(),
					'email_client' => $client->getemailclient(),
					'login_client' => $client->getloginclient(),
					'mot_passe' => $client->getmotpasseclient(),
                    'id_admin'=> $client->getidadmin()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherclient(){
			
			$sql="SELECT * FROM client";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerClient($id_client){
			$sql="DELETE FROM client WHERE id_client= :id_client";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_client',$id_client);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierClient($client, $id_client){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE client SET 
						nom_client = :nom_client, 
						prenom_client = :prenom_client,
						date_naissance = :date_naissance,
						telephone_client = :telephone_client,
						email_client = :email_client,
						login_client= :login_client,
						mot_passe = :mot_passe,
                        id_admin = :id_admin
					WHERE id_client = :id_client'
				);
				$query->execute([
					'nom_client' => $client->getnomclient(),
					'prenom_client' => $client->$client->getprenomclient(),
					'date_naissance' => $client->getDateNaissance(),
					'telephone_client' => $client->gettelephoneclient(),
					'email_client' => $client->getemailclient(),
					'login_client' => $client->getloginclient(),
					'mot_passe' => $client->getmotpasseclient(),
                    'id_admin'=> $client->getidadmin(),                 
					'id_client' => $id_client
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererClient($id_client){
			$sql="SELECT * from client where id_client=$id_client";
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

		function recupererClient1($id_client){
			$sql="SELECT * from client where id_client=$id_client";
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