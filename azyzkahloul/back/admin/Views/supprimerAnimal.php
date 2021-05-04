<?PHP
	include "../controller/AnimalC.php";

	$AnimalC=new AnimalC();
	
	if (isset($_POST["id"])){
		$AnimalC->supprimerAnimal($_POST["id"]);
		header('Location:afficherAnimal.php');
	}

?>