<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
    $nom_categorie = $_POST['nom_categorie'];  
    $nom_plante = $_POST['nom_plante'];  
    $prix = $_POST['prix'];  
    $date_plante = $_POST['date_plante'];  
    $image = $_POST['image'];  
    $id_vendeur = $_POST['id_vendeur'];

		//write sql query `

		$sql = "INSERT INTO `plante`(`nom_categorie`, `nom_plante`, `prix`, `date_plante`, `image`, `id_vendeur` )  VALUES ('$nom_categorie', '$nom_plante', '$prix', '$date_plante', '$image', '$id_vendeur' ) "; 

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #10af15;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<a href="../index.html">Acceuil</a>
<a href="view.php">Afficher tous les plantes</a>
<h2>Nouvelle plante</h2>

<form action="" style="border:2px solid #ccc" method="POST">
  <div class="container">
  <p>Veuillez remplir tous les champs:</p>
  <hr>

    Categorie:<br>
    <input type="text" name="nom_categorie">
    <br>
    Nom plante:<br>
    <input type="text" name="nom_plante">
    <br>
    Prix:<br>
    <input type="number" name="prix">
    <br>
    Date de plante:<br>
    <input type="date" name="date_plante">
    <br>
    Image:<br>
    <input type="file" name="image">
    <br>
    ID Vendeur:<br>
    <input type="number" name="id_vendeur">
    <br>

    <input type="submit" name="submit" value="Ajouter">
</div>
</form>

</body>
</html>