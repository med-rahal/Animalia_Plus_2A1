<?PHP
	include "../controller/ClientC.php";

	$ClientC=new ClientC();
	
	if (isset($_POST["id_client"]))
	{
		$ClientC->supprimerClient($_POST["id_client"]);
		header('Location:showClient.php');
	}

?>