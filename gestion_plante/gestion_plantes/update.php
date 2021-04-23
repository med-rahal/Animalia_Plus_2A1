<?php 
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$nom_categorie = $_POST['nom_categorie'];  
		$nom_plante = $_POST['nom_plante'];  
		$prix = $_POST['prix'];  
		$date_plante = $_POST['date_plante'];  
		$image = $_POST['image'];  
		$id_vendeur = $_POST['id_vendeur'];
		$user_id = $_GET['ref_plante'];

		// write the update query
		$sql = " UPDATE `plante` SET  `ref_plante` = '$ref_plante',  `nom_categorie` = '$nom_categorie',  `nom_plante` = '$nom_plante',  `prix` = '$prix',  `date_plante` = '$date_plante',  `image` = '$image',  `id_vendeur` = '$id_vendeur' WHERE `ref_plante` ='$user_id' ";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['ref_plante'])) {
	$user_id = $_GET['ref_plante'];
	//$user_id = $_GET['ref_plante'];

	// write SQL to get user data
	$sql = "SELECT * FROM `plante` WHERE `ref_plante`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$nom_categorie = $row['nom_categorie'];
			$nom_plante = $row['nom_plante'];
			$prix = $row['prix'];
			$date_plante = $row['date_plante'];
			$image = $row['image'];
			$id_vendeur = $row['id_vendeur'];
			$ref_plante = $row['ref_plante'];
		}

	?>
		<a href="../index.html">Acceuil</a>
		<a href="create.php">Nouvelle plante</a>
		<a href="view.php">Afficher tous les plantes</a>

		<h2>User Update Form</h2>
		<form action="" method="post">
		  <fieldset>
		    <legend>Personal information:</legend>
		    Nom Categorie:<br>
		    <input type="text" name="nom_categorie" value="<?php echo $nom_categorie; ?>">
		    <input type="hidden" name="user_id" value="<?php echo $ref_plante; ?>">
		    <br>
		    Nom Plante:<br>
		    <input type="text" name="nom_plante" value="<?php echo $nom_plante; ?>">
		    <br>
		    prix:<br>
		    <input type="number" name="prix" value="<?php echo $prix; ?>">
		    <br>
		    date_plante:<br>
		    <input type="date" name="date_plante" value="<?php echo $date_plante; ?>">
		    <br>
		    Image:<br>
		    <input type="file" name="image" value="<?php echo $image; ?>">
		    <br>
			ID Vendeur:<br>
		    <input type="number" name="id_vendeur" value="<?php echo $id_vendeur; ?>">
		    <br>
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>

		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>