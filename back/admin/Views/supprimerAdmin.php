<?PHP
include "../Controller/AdminC.php";

$AdminC=new AdminC();

if (isset($_POST["id_admin"]))
{
    $AdminC->supprimeradministrateur($_POST["id_admin"]);
     header('Location:showAdmin.php');
}
?>