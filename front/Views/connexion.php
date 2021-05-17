<?php

require_once '../Model/Client.php';
require '../Controller/ClientC.php';

$userC = new ClientC();

if(!empty($_POST['nom_client']) && !empty($_POST['prenom_client']) && !empty($_POST['date_naissance']) && !empty($_POST['type_client']) && !empty($_POST['email_client']) && !empty($_POST['login_client']) && !empty($_POST['mot_passe']) && !empty($_POST['mdp_verif']))
{

    $sql="SELECT * FROM client WHERE email_client='" . $_POST['email_client'] . "'";
    $db = config::getConnexion();
    
        $query=$db->prepare($sql);
        $query->execute();
        $count=$query->rowCount(); 

if($count == 0 ){
$user=new Client($_POST['nom_client'], $_POST['prenom_client'], $_POST['date_naissance'],$_POST['type_client'],$_POST['email_client'],$_POST['login_client'],$_POST['mot_passe']);
try{
    $userC->ajouterclient($user);
    header('Location:../Views/login_client.php');
}catch(Exception $e){
    echo "ERREUR connexion.php : ".$e->getMessage();
    exit;
}
}

}

?>



<!DOCTYPE html>
<html lang="en">

  <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Connexion</title> 
        <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    
        <link rel="stylesheet" href="../assets/css/vendor.css">
        <link rel="stylesheet" href="../assets/css/utility.css">
        <link rel="stylesheet" href="../assets/css/app.css">  
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
      
  </head>

    <body> 


    <nav class="primary-nav primary-nav-wrapper">
                <div class="container">
                    <div class="primary-nav">
                        <a class="main-logo" href="../index.php">

                            <img src="../assets/images/logo/logo.png" alt="logo animliaplus"></a>
                            <br>
                        <form class="main-form" >

                            <label for="main-search"></label>

                            <input class="input-text input-text--border-radius input-text--style-1" type="text" id="main-search" placeholder="rechercher">

                            <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button></form>

                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

                                <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

                                        <a><i class="far fa-user-circle"></i></a>

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:200px">
                                           
                                            <li>

                                                <a href="Views/login_client.php"><i class="fas fa-user-friends"></i></i>

                                                    <span>Espace client</span></a></li>
                                            <li>

                                                <a href="index.html"><i class="fas fa-store"></i>

                                                    <span>Espace vendeur</span></a></li>
                                        </ul>
                        
                                    </li>
                                    <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Settings">

                                        <a><i class="fas fa-user-cog"></i></a>

                                        <span class="js-menu-toggle"></span>
                                        <ul style="width:120px">
                                            <li class="has-dropdown has-dropdown--ul-right-100">

                                                <a>Language<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                           

                                                <span class="js-menu-toggle"></span>
                                                <ul style="width:100px">
                                                    <li>

                                                        <a class="u-c-brand">ENGLISH</a></li>
                                                    <li>

                                                        <a>ESPANOL</a></li>
                                                </ul>
                                        
                                            </li>
                                        </ul>
                        
                                    </li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Contact">

                                        <a href="tel:+21628824527"><i class="fas fa-phone-volume"></i></a></li>
                                    <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                        <a href="mailto:AnimaliaPlus@gmail.com"><i class="far fa-envelope"></i></a></li>
                                </ul>
                    
                            </div>
                
                        </div>
    
                    </div>
        
                </div>
            </nav>

            <br>
</form>
            <nav class="secondary-nav-wrapper">
                <div class="container">
                    <div class="secondary-nav">
                        <div class="menu-init" id="navigation2">

                            <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog" type="button"></button>

               
                            <div class="ah-lg-mode">

                                <span class="ah-close">✕ Close</span>

       
                                <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                                    <li>

                                        <a href="test.html">Nouveaux Produits</a>
                                        <a href="../index.php">Acceuil</a>
                                        <a href="login_client.php">Connexion</a>
                                        <a href="connexion.php">Inscription</a>
                                        <a href="#panier">Panier</a>       
                                        <a href="#aboutus">À propos</a>
                                        <a href="#contact">Contact</a>
                                        <a href="#reclamation"> Réclamations et Avis</a>
                                
                                    
                                    </li> 

                                </ul>
                                    
                                          
                              
                            </div>
                         
                        </div>
                </div>
         </div>
    </div>

  

 <div class="app-content">
    <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
    <div class="owl-carousel primary-style-1" id="hero-slider">
        <div class="hero-slide hero-slide--1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-content slider-content--animation">

                            <span class="content-span-1 u-c-secondary">Dernière mise à jour Stock</span>

                            <span class="content-span-2 u-c-secondary">20% Off Pour Tous Nos Clients Fidéles !</span>

                            <span class="content-span-3 u-c-secondary">Trouver des animaux de compagnie sur les meilleurs prix, Découvrez également les produits les plus vendus de plantes</span>

                            <span class="content-span-4 u-c-secondary">À partir de

                                <span class="u-c-brand">20 DT</span></span>

                            <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">MAGASINEZ MAINTENANT</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide hero-slide--2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-content slider-content--animation">

                            <span class="content-span-1 u-c-white">Bonjour</span>

                            <span class="content-span-2 u-c-white">10% remise sur les alimentations de votre chien</span>

                            <span class="content-span-3 u-c-white">Animalia Plus.. Votre Store Préférer</span>

                            <span class="content-span-4 u-c-white">A partir de

                                <span class="u-c-brand">10 DT</span></span>

                            <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">SHOP NOW</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide hero-slide--3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-content slider-content--animation">

                            <span class="content-span-1 u-c-secondary">DES OFFRES</span>

                            <span class="content-span-2 u-c-secondary">sur les plantes,animaux et alimentations</span>

                            <span class="content-span-3 u-c-secondary">À Partir de 

                                <span class="u-c-brand">20 DT</span></span>

                            <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">ACHETEZ MAINTENANT</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="section__content">
                    <div class="container">
                        <div class="row row--center">
                            <div class="col-lg-9 col-md-8 u-s-m-b-30">
                                <div class="l-f-o">
                                    <div class="l-f-o__pad-box">
                                        <h1 class="gl-h1">Inscription</h1>   
                                            <div id="erreur" name="erreur"></div>
                                        <form class="l-f-o__form" action="" id="captcha_form" onsubmit="return verif()" method="POST" >
                                            <div class="gl-s-api">
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="nom_client">Nom*</label>

                                                <input class="input-text input-text--primary-style" type="text" id="nom_client" name="nom_client" placeholder="Entrez votre nom" ></div>
                                                <span id="first_name_error" class="text-danger"></span>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="prenom_client">Prenom*</label>

                                                <input class="input-text input-text--primary-style" type="text"  id="prenom_client" name="prenom_client" placeholder="Entrez votre prenom"></div>
                                                <span id="last_name_error" class="text-danger"></span> 
                                                
                                          
                                                <div class="u-s-m-b-30">
                                               
                                                    <label class="gl-label" for="date_naissance">Date de naissance*</label>
                                                    
                                                    <input class="input-text input-text--primary-style" type="date" id="date_naissance" name="date_naissance"  placeholder="Enter votre date de naissance"></div>
                                                                                
                                            <div class="u-s-m-b-30">

                                            <span class="gl-label">Est ce que vous voulez étre un client ou vendeur*</span>
                                            
                                               <select class="select-box select-box--primary-style" id="type_client" name="type_client" size="1">
                                               <option value="Client">Client</option>
                                               <option value="Vendeur">Vendeur</option> </select> 
                                          </div>

                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="email_client">E-MAIL*</label>

                                                <input class="input-text input-text--primary-style" type="email" id="email_client" name="email_client"  placeholder="Enter votre adresse e-mail " ></div>
                                               
                                            
                                                <div class="u-s-m-b-30">

                                                <label class="gl-label" for="login_client">Login*</label>

                                                <input class="input-text input-text--primary-style" type="text" id ="login_client" name="login_client" placeholder="Enter votre login" ></div> 
                                                           
                                            
                                        <div class="u-s-m-b-30">

                                                <label class="gl-label" for="mot_passe">Mot de passe*</label>

                                                <input class="input-text input-text--primary-style" type="password" id="mot_passe" name="mot_passe" placeholder="Enter votre mot de passe"></div>
                                                <span id="password_error" class="text-danger"></span>  
                                                

                                                <div class="u-s-m-b-30">

                                                <label class="gl-label" for="mdp_verif">Vérification du mot de passe*</label>

                                                <input class="input-text input-text--primary-style" type="password" id="mdp_verif" name="mdp_verif" placeholder="Confirmer votre mot de passe" ></div> 
                                               
                                                <div class="u-s-m-b-30">
                                                <div class="g-recaptcha" data-sitekey="6LclEbwaAAAAAAaMEO376tKw5iF9soiq6JdHJti8"></div>
                                                 <span id="captcha_error" class="text-danger"></span>

                                            <div class="u-s-m-b-15">

                                                <button class="btn btn--e-transparent-brand-b-2" name="envoyer" id="envoyer" type="submit">Envoyer</button></div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
            </div>        
        </div>
</form>
      

        <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="../assets/js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="../assets/js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="../assets/js/app.js"></script> 

    <script src="../assets/js/script1.js"></script>
    
        </body>
</html> 








