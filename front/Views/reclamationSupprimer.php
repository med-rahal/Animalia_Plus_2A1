<?PHP
<<<<<<< HEAD
include "../controller/reclamationC.php";
=======
include "../Controller/reclamationC.php";
>>>>>>> 144683f7e8657a761bc3322917553d57ce103627
$reclamationC=new ReclamationC();
if (isset($_GET['date_creation'])){
	$reclamationC->supprimerReclamation($_GET['date_creation']);
	header('Location: reclamationAffichage.php');
}

?>