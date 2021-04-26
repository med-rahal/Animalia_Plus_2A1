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
                header('Location:../index.php');
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
        <title>Connexion</title> 
        <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/vendor.css">
        <link rel="stylesheet" href="../assets/css/utility.css">
        <link rel="stylesheet" href="../assets/css/app.css">
  </head>

    <body> 
    <nav class="primary-nav primary-nav-wrapper">
                <div class="container">
                    <div class="primary-nav">
                        <a class="main-logo" href="../index.php">

                            <img src="../assets/images/logo/logo.png" alt="logo animliaplus"></a>
                            <br>
                        <form class="main-form">

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
            <!--====== Nav 2 ======-->
            <nav class="secondary-nav-wrapper">
                <div class="container">

                    <!--====== Secondary Nav ======-->
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
    </div



    <div class="app-content">

<!--====== Primary Slider ======-->
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
                            <div class="col-lg-6 col-md-8 u-s-m-b-30">
                                <div class="l-f-o">

                                <div id="erreur"></div>
                                    <div class="l-f-o__pad-box"> 
                                        <h1 class="gl-h1">Nouveau Client</h1>
                                        <span class="gl-text u-s-m-b-30">En créant un compte dans notre boutique, vous serez en mesure de parcourir le processus de commande plus rapidement, de stocker les adresses de livraison, de consulter et de suivre vos commandes dans votre compte et plus encore..</span>
                                        <div class="u-s-m-b-15">

                                            <a class="l-f-o__create-link btn--e-transparent-brand-b-2" href="connexion.php">Créer un compte </a></div>
                                        <h1 class="gl-h1">Connexion</h1>

                                        <span class="gl-text u-s-m-b-30">Si vous avez un compte chez nous, veuillez vous connecter.</span>
                                        <form class="l-f-o__form" method ="POST">
                                          
                                         
                                            <div class="u-s-m-b-30">
                                                <br>
                                                <label class="gl-label" for="email_client">E-mail</label><br>

                                                <input class="input-text input-text--primary-style" type="text" name="email_client" id="email_client" pattern=".+@gmail.com|.+@esprit.tn|.+@yahoo.com|.+@yahoo.fr" placeholder="Entrer E-mail"  required ></div>
                                            <div class="u-s-m-b-30">
                                                <br>
                                                <label class="gl-label" for="mot_passe">Mot de passe</label><br>
                                                <input class="input-text input-text--primary-style" type="password" name= "mot_passe" id="mot_passe" placeholder="Entrer mot de passe" ></div>
                                            <div class="gl-inline">
                                                <div class="u-s-m-b-30">

                                                    <button class="btn btn--e-transparent-brand-b-2" type="submit"  onclick="verif();" >connecter</button></div>
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
                <footer>
            <div class="outer-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">

                                <span class="outer-footer__content-title">Contact Us</span>
                                <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                    <span>4247 Ashford Drive Virginia VA-20006 USA</span></div>
                                <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                    <span>(+0) 900 901 904</span></div>
                                <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                    <span>contact@domain.com</span></div>
                                <div class="outer-footer__social">
                                    <ul>
                                        <li>

                                            <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li>

                                            <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li>

                                            <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li>

                                            <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li>

                                            <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">

                                        <span class="outer-footer__content-title">Information</span>
                                        <div class="outer-footer__list-wrap">
                                            <ul>
                                                <li>

                                                    <a href="cart.html">Cart</a></li>
                                                <li>

                                                    <a href="dashboard.html">Account</a></li>
                                                <li>

                                                    <a href="shop-side-version-2.html">Manufacturer</a></li>
                                                <li>

                                                    <a href="dash-payment-option.html">Finance</a></li>
                                                <li>

                                                    <a href="shop-side-version-2.html">Shop</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">
                                        <div class="outer-footer__list-wrap">

                                            <span class="outer-footer__content-title">Our Company</span>
                                            <ul>
                                                <li>

                                                    <a href="about.html">About us</a></li>
                                                <li>

                                                    <a href="contact.html">Contact Us</a></li>
                                                <li>

                                                    <a href="index.html">Sitemap</a></li>
                                                <li>

                                                    <a href="dash-my-order.html">Delivery</a></li>
                                                <li>

                                                    <a href="shop-side-version-2.html">Store</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="outer-footer__content">

                                <span class="outer-footer__content-title">Join our Newsletter</span>
                                <form class="newsletter">
                                    <div class="u-s-m-b-15">
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="male" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="male">Male</label></div>
                                        </div>
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="female" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="female">Female</label></div>
                                        </div>
                                    </div>
                                    <div class="newsletter__group">

                                        <label for="newsletter"></label>

                                        <input class="input-text input-text--only-white" type="text" id="newsletter" placeholder="Enter your Email">

                                        <button class="btn btn--e-brand newsletter__btn" type="submit">SUBSCRIBE</button></div>

                                    <span class="newsletter__text">Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="lower-footer__content">
                                <div class="lower-footer__copyright">

                                    <span>Copyright © 2021</span>

                                    <a href="index.html">Reshop</a>

                                    <span>All Right Reserved</span></div>
                                <div class="lower-footer__payment">
                                    <ul>
                                        <li><i class="fab fa-cc-stripe"></i></li>
                                        <li><i class="fab fa-cc-paypal"></i></li>
                                        <li><i class="fab fa-cc-mastercard"></i></li>
                                        <li><i class="fab fa-cc-visa"></i></li>
                                        <li><i class="fab fa-cc-discover"></i></li>
                                        <li><i class="fab fa-cc-amex"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


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

    <script src="../assets/js/script3.js"></script>

        </body>
</html>
