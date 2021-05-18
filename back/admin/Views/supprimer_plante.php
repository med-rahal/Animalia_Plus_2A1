<?PHP
	include "../controller/planteC.php";

	$planteC=new planteC();
	
	if (isset($_POST["ref_plante"])){
		$planteC->supprimerplante($_POST["ref_plante"]);
		header('Location:afficher_plante.php');
	}

?>