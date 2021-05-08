<?PHP
	include "../controller/CategorieAlimN.php";

	$CategorieN=new CategorieN();
	
	if (isset($_POST["id_categorie"])){
		$CategorieN->supprimerCategorie($_POST["id_categorie"]);
		header('Location:afficherCategorieAlim.php');
	}

?>