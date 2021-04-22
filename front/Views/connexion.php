<?php

include_once '../Controller/ClientC.php';
include_once '../Model/Client.php';
session_start();
if(!empty($_POST['nom_client']) && !empty($_POST['prenom_client']) && !empty($_POST['date_naissance']) && !empty($_POST['telephone_client']) && !empty($_POST['email_client']) && !empty($_POST['login_client']) && !empty($_POST['mot_passe']) && !empty($_POST['id_admin'])){

$nom_client = $_POST['nom_client'];
$prenom_client = $_POST['prenom_client'];
$date_naissance = $_POST['date_naissance'];
$telephone_client = $_POST['telephone_client'];
$email_client = $_POST['email_client'];
$login_client = $_POST['login_client'];
$mot_passe = $_POST['mot_passe'];
$mdp_verif= $_POST['mdp_verif'];
$id_admin =$_POST['id_admin'];


if(strcmp($mot_passe,$mdp_verif)!=0){
    echo"<script language=\"javascript\">";
    echo"alert('Les mots de passes ne sont pas identiques');";
    echo"</script>";
    exit;
    
}



$userC = new ClientC();
$user=new Client ($nom_client, $prenom_client, $date_naissance, $telephone_client,$email_client,$login_client,$mot_passe,$id_admin);
try{
    $userC->ajouterclient($user);
}catch(Exception $e){
    echo "ERREUR connexion.php : ".$e->getMessage();
    exit;
}
echo"<script language=\"javascript\">";
echo"alert('Inscription compléte !')";
echo"</script>";

}


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Connexion</title>
    </head>

    <body>
       

    <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h1 class="text-center font-weight-light my-4">S'inscrire</h1>
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <table  align="center">
                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="nom_client">Nom:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="nom_client" id="nom_client" maxlength="20" placeholder="Entrer le nom" >
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="prenom_client">Prénom:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="prenom_client" id="prenom_client" maxlength="20" placeholder="Entrer le prenom">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="date_naissance">date de naissance:</label>
                                                </td>
                                                <td>
                                                    <input  class="form-control" type="date" name="date_naissance" id="date_naissance">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="telephone_client">telephone:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="telephone_client" id="telephone_client"  placeholder="Entrer le numero de telephone">
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="email">Adresse mail:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="email" name="email_client" id="email_client" pattern=".+@gmail.com|.+@esprit.tn|.+@yahoo.com|.+@yahoo.fr" placeholder="Entrer l'adresse mail">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="login_client">Login:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="login_client" id="$login_client" placeholder="Entrer le nom d'utilisateur">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="mot_passe">Mot de passe:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="mot_passe" name="mot_passe" id="mot_passe" placeholder="Entrer le mot de passe">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="small mb-1" for="mdp_verif">Verifier Mot de passe:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="password" name="mdp_verif" id="mdp_verif" placeholder="Confirmer le mot de passe">
                                                </td>
                                            </tr>

                                            <td>
                                                    <label class="small mb-1" for="id_admin">id_admin:</label>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" name="id_admin" id="id_admin" placeholder="Entrer le mot de passe">
                                                </td>
                                            </tr>


                                </div> 
                                             <tr align="center">
                                                
                                                <td>
                                                    <input class="btn btn-primary btn-block" type="submit" value="Envoyer" >  
                                                    <input class="btn btn-primary btn-block" type="reset" value="Annuler" >
                                                </td>
                                            </tr> 
                                            
                                            <tr>
                                               
                                                <td>
                                                     
                                                </td>
                                            </tr>
      
    </body>
</html>











 