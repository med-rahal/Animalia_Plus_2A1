<?php
require '../Controller/AdminC.php';
require_once '../Model/Admin.php';

$adminC = new AdminC();

if (isset($_POST['nom_administrateur']) && isset($_POST['mot_passe']) ) {

    if (!empty($_POST['nom_administrateur']) && !empty($_POST['mot_passe'])){
    
    $admin = new Admin($_POST['nom_administrateur'],$_POST['mot_passe']);
    $adminC->modifieradministrateur($admin,$_GET['id_admin']);
    header('Location:../index.php');

} 

}
?> 

<?php
	session_start();
	if(!isset($_SESSION["id_admin"])){
    var_dump($_SESSION);
	exit(); 
	}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier un administrateur</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Connexion administrateur</title>

    <!-- Fontfaces CSS-->
   <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
   <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all"> 
    <link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
     <link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all">
     <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
     <link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
     <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">-->
     <link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
   
     <link href="../assets/css/theme.css" rel="stylesheet" media="all">

</head>






<body>

<header id="header" class="fixed-top">
                <div class="container d-flex align-items-center">
                   
                    <h5>Bienvenue <?php  echo $_SESSION['nom_administrateur']; ?></h5> 
                   <a href="logout.php" class="connexion-btn scr ollto">Déconnexion</a>
            </div>
</header> 


<?php
			if (isset($_GET['id_admin'])){
				$user = $adminC->recupererAdmin1($_GET['id_admin']);	
?> 

<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="../assets/images/icon/logo.png" alt="AnimaliaPlus">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Nom administrateur</label>
                                    <input class="au-input au-input--full" type="text" name="nom_administrateur" value = "<?php echo $user->nom_administrateur; ?>">
                                </div>
                                <div class="form-group">
                                    <label>mot de passe</label>
                                    <input class="au-input au-input--full" type="password" name="mot_passe"   value = "<?php echo $user->mot_passe; ?>">
                                </div>
                               
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">confirmer</button>
                            </form>
                              
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


	<?php
    }
    ?>

</body>

</html>