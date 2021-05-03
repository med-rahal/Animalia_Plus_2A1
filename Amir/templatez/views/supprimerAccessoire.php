<?PHP
	include "../controller/AccessoireN.php";

	$AccessoireN=new AccessoireN();
	
	if (isset($_POST["id_accessoire"])){
		$AccessoireN->supprimerAccessoire($_POST["id_accessoire"]);
		header('Location:afficherAccessoire.php');
	}

?>