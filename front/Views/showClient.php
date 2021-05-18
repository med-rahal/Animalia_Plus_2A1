<?php
include "../Controller/ClientC.php";

$ClientC = new ClientC();
$clients = $ClientC->afficherclient();

?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Afficher la liste des Clients</title>
    </head>
    <body>
		<button><a href="connexion.php">client</a></button>
		<hr>
		<table>
			<tr>
				<th>id_client</th>
				<th>Nom</th>
				<th>Prenom</th>
                <th>Date de naissance</th>
                <th>telephone</th>
				<th>Email</th>
				<th>Login</th>
                <th>Mot de passe</th>
                <th>id_admin</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?php
				foreach($clients as $user){
			?>
				<tr>
					<td><?PHP echo $user['id_client']; ?></td>
					<td><?PHP echo $user['nom_client']; ?></td>
					<td><?PHP echo $user['prenom_client']; ?></td> 
                    <td><?PHP echo $user['date_naissance']; ?></td> 
                    <td><?PHP echo $user['telephone_client']; ?></td> 
					<td><?PHP echo $user['email_client']; ?></td>
					<td><?PHP echo $user['login_client']; ?></td> 
                    <td><?PHP echo $user['mot_passe']; ?></td> 
                    <td><?PHP echo $user['id_admin']; ?></td> 
					<td>
						<form method="POST" action="supprimerClient.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id_client']; ?> name="id_client">
						</form>
					</td>
					<td>
						<a href="modifierClient.php?id=<?php echo $user['id_client']; ?>"> Modifier </a>
					</td>
				</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>