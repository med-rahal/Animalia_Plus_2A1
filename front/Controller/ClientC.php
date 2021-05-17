<?PHP
	include '../config.php';
	include_once '../Model/client.php';

	class ClientC {
		
		function ajouterclient($client){
			
			$db = config::getConnexion();
			$query = $db->prepare('INSERT INTO client(nom_client, prenom_client, date_naissance,type_client,email_client,login_client,mot_passe,id_admin) 
			VALUES (:nom_client, :prenom_client, :date_naissance, :type_client, :email_client, :login_client, :mot_passe,:id_admin)'
		);
		
			try{
			
				$query->execute([  
					'nom_client' => $client->getnomclient(),
					'prenom_client' => $client->getprenomclient(),
					'date_naissance' => $client->getdatenaissance(), 
					'type_client' => $client->gettypeclient(),
					'email_client' => $client->getemailclient(),
					'login_client' => $client->getloginclient(),
					'mot_passe' => $client->getmotpasseclient(), 
                    'id_admin'=> '1'
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
						type_client = :type_client,
						email_client = :email_client,
						login_client= :login_client,
						mot_passe = :mot_passe,
                        id_admin = :id_admin
					WHERE id_client = :id_client'
				);
				$query->execute([
					'nom_client' => $client->getnomclient(),
					'prenom_client' => $client->getprenomclient(),
					'date_naissance' => $client->getdatenaissance(), 
					'type_client' => $client->gettypeclient(),
					'email_client' => $client->getemailclient(),
					'login_client' => $client->getloginclient(),
					'mot_passe' => $client->getmotpasseclient(),
                    'id_admin'=>'1',                 
					'id_client' => $id_client
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		} 
		 function getClientById($id_client) {
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'SELECT * FROM client WHERE id_client = :id_client'
				);
				$query->execute([
					'id_client' => $id_client
				]);
				return $query->fetch();
			} catch (PDOException $e) {
				$e->getMessage();
			}
		} 

		function getIDClientByEmail($email_client) {
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'SELECT id_client FROM client WHERE email_client = :email_client'
				);
				$query->execute([
					'email_client' => $email_client
				]);
				return $query->fetch();
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