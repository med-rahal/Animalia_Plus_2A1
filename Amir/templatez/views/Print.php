<?PHP
	include "../controller/AccessoireN.php";

	$AccessoireN=new AccessoireN();
	$listeAccessoire=$AccessoireN->afficherAccessoire();


?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Accessoires </title>
    </head>
    <body>
		
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>id</th>
				<th>Nom</th>
				<th>Reference</th>
				<th>Categorie</th>
				<th>Type</th>
				<th>Prix</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listeAccessoire as $id_accessoire){
			?>
				<tr>
					<td><?PHP echo $id_accessoire['id_accessoire']; ?></td>
					<td><?PHP echo $id_accessoire['nom_accessoire']; ?></td>
					<td><?PHP echo $id_accessoire['ref_accessoire']; ?></td>
					<td><?PHP echo $id_accessoire['categorie_accessoire']; ?></td>
					<td><?PHP echo $id_accessoire['type']; ?></td>
					<td><?PHP echo $id_accessoire['prix']; ?></td>
					<td>
						<form method="POST" action="supprimerAccessoire.php">
						<input type="submit" name="supprimer" value="delete">
						<input type="hidden" value=<?PHP echo $id_accessoire['id_accessoire']; ?> name="id_accessoire">
						</form>
					</td>
					<td>
						<a href="modifierAccessoire.php?id_accessoire=<?PHP echo $id_accessoire['id_accessoire']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
		<button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
		
	</body>
</html>
