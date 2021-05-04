<?php
include  "../Controller/AdminC.php";

$AdminC = new AdminC(); 
$admins = $AdminC->afficheradministrateur();

?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Afficher la liste des administrateurs</title>
    </head>
    <body>
		<button><a href="../index.html">Retour</a></button>
		<hr>
		<table>
			<tr>
				<th>id_admin</th>
				<th>nom_administrateur</th>
				<th>mot_passe</th>
				<th>supprimer</th>
			</tr>

			<?php
				foreach($admins as $user){
			?>
				<tr>
					<td><?PHP echo $user['id_admin']; ?></td>
					<td><?PHP echo $user['nom_administrateur']; ?></td>
					<td><?PHP echo $user['mot_passe']; ?></td> 
					<td>
						<form method="POST" action="supprimerAdmin.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id_admin']; ?> name="id_admin">
						</form>
					</td>
				</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>