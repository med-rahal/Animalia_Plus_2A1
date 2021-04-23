<?php 
include "config.php";

//write the query to get data from plante table

$sql = "SELECT * FROM plante";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>plante</h2>
		<a href="../index.html">Acceuil</a>
		<a href="create.php">Nouvelle plante</a>
<table class="table">
	<thead>
		<tr>
		<th>Reference Plante</th>
		<th>Nom Categorie</th>
		<th>Nom Plante</th>
		<th>Prix</th>
		<th>Date De Plante</th>
		<th>Image</th>
		<th>ID Vendeur</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['ref_plante']; ?></td>
					<td><?php echo $row['nom_categorie']; ?></td>
					<td><?php echo $row['nom_plante']; ?></td>
					<td><?php echo $row['prix']; ?></td>
					<td><?php echo $row['date_plante']; ?></td>
					<td><?php echo $row['image']; ?></td>
					<td><?php echo $row['id_vendeur'];?></td>
					<td><a class="btn btn-info" href="update.php?ref_plante=<?php echo $row['ref_plante']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?ref_plante=<?php echo $row['ref_plante']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>