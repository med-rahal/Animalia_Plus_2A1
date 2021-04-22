<?php
    require('../config.php');
    session_start();

    if (isset($_POST['email_client'])){
        $email_client=$_POST['email_client'];
        $mot_passe=$_POST['mot_passe'];
        $sql="SELECT * FROM client WHERE email_client='" . $email_client . "' && mot_passe = '". $mot_passe."'";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $count=$query->rowCount();
            if($count==1){
                $user=$query->fetch(); 
                $_SESSION['login_client'] = $user['login_client'];
                $_SESSION['id_client'] = $user['id_client'];
                header('Location:espace_client.php');
            }
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  } 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Connexion Client</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords"> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">


<link rel="stylesheet" href="../assets/css/vendor.css">

<link rel="stylesheet" href="../assets/css/utility.css">

<link rel="stylesheet" href="../assets/css/app.css">

</head>

<body class="config">
         <div id="app">
                <header class="header--style-1">
                <div class="menu-init" id="navigation2">

  <nav class="primary-nav primary-nav-wrapper--border">
            <div class="ah-lg-mode">

    <span class="ah-close">✕ Close</span>


    <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
        <li>

            <a href="test.html">Nouveaux Produits</a></li> 

        <li>

            <a>PAGES<i class="fas fa-angle-down u-s-m-l-6"></i></a>
       
        
        <li>

            <a href="test.html"> Réclamations et Avis</a></li>
    </ul>
  
</div>

</div>


</nav>

<div class="section__content">
                    <div class="container">
                        <div class="row row--center">
                            <div class="col-lg-6 col-md-8 u-s-m-b-30">
                                <div class="l-f-o">

                                    <div class="l-f-o__pad-box"> 
                                        <h1 class="gl-h1">Nouveau Client</h1>
                                        <span class="gl-text u-s-m-b-30">En créant un compte dans notre boutique, vous serez en mesure de parcourir le processus de commande plus rapidement, de stocker les adresses de livraison, de consulter et de suivre vos commandes dans votre compte et plus encore..</span>
                                        <div class="u-s-m-b-15">

                                            <a class="l-f-o__create-link btn--e-transparent-brand-b-2" href="connexion.php">Créer un compte </a></div>
                                        <h1 class="gl-h1">Connexion</h1>

                                        <span class="gl-text u-s-m-b-30">Si vous avez un compte chez nous, veuillez vous connecter.</span>
                                        <form class="l-f-o__form" method ="POST">
                                          
                                         
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="email_client">E-mail*</label>

                                                <input class="input-text input-text--primary-style" type="text" name=email_client id="email_client" placeholder="Enter E-mail"></div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="login-password">Mot de passe*</label>

                                                <input class="input-text input-text--primary-style" type="text" name=mot_passe id="mot_passe" placeholder="Enter Password"></div>
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-30">

                                                    <button class="btn btn--e-transparent-brand-b-2" type="submit">connecter</button></div>
                                                <div class="u-s-m-b-30">

                                                    <a class="gl-link" href="lost-password.html">mot de passe oublié ?</a></div>
                                            </div>
                                          

                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


 
    <link rel="stylesheet" href="../assets/css/app.css">
</head>
