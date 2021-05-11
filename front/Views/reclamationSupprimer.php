<?PHP
include "../controller/reclamationC.php";
$reclamationC=new ReclamationC();
if (isset($_GET['date_creation'])){
	$reclamationC->supprimerReclamation($_GET['date_creation']);
	header('Location: reclamationAffichage.php');
}

?>