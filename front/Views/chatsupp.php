<?PHP
include "../Controller/reclamationC.php";

$db = config::getConnexion();
$sql="truncate table messages";
$req=$db->prepare($sql);
$req->execute();

	header('Location: index.php');


?>
           