<?PHP
	include "../controller/categorieC.php";

	$categorieC=new categorieC();
	
	if (isset($_POST["nom_categorie"])){
		$categorieC->supprimercategorie($_POST["nom_categorie"]);
		header('Location:afficher_categorie.php');
	}

?>