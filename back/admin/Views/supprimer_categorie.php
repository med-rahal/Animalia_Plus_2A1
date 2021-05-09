<?PHP
	include "../controller/categorieanimalC.php";

	$categorieanimalC=new categorieanimalC();
	
	if (isset($_POST["nom_categorie"])){
		$categorieanimalC->supprimercategorie($_POST["nom_categorie"]);
		header('Location:afficher_categorie.php');
	}

?>