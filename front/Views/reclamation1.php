<?PHP
include "../Model/reclamationE.php";
include "../Controller/reclamationC.php";
if (isset($_POST['type']) )
{
	
	
	$datetime = date_create()->format('Y-m-d H:i:s');
	$reclamation1=new reclamation($_POST['type'],$_POST['description'],$datetime,"","","non traitée",$_POST['mail'],$_POST['type']);


$reclamation1C=new ReclamationC();
$reclamation1C->ajouterReclamation($reclamation1);

$listeid=$reclamation1C->id_grand();
foreach ( $listeid as $row) 
{
	$id=$row['MAX(id)'];
}




header('Location: reclamationAffichage.php');
	
}else{
	echo "vérifier les champs";
}







?>