<?PHP
	include "../controller/AlimentationC.php";

	$AlimentationC=new AlimentationC();
	
	if (isset($_POST["id_alimentation"])){
		$AlimentationC->supprimerAlimentation($_POST["id_alimentation"]);
		header('Location:afficherAlimentation.php');
	}

?>