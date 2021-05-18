<?php
     include "../Controller/ClientC.php";
     include_once '../Model/Client.php';

	$ClientC = new ClientC();

	if (isset($_POST["nom_client"]) &&  isset($_POST["prenom_client"]) && isset($_POST["date_naissance"]) && isset($_POST["type_client"]) && isset($_POST["email_client"]) && isset($_POST["login_client"]) &&  isset($_POST["mot_passe"])){
		
        if (!empty($_POST["nom_client"]) && !empty($_POST["prenom_client"]) &&!empty($_POST["date_naissance"]) && !empty($_POST["type_client"]) &&  !empty($_POST["email_client"]) && !empty($_POST["login_client"]) && !empty($_POST["mot_passe"])){
         
            $user = new Client($_POST['nom_client'],$_POST['prenom_client'],$_POST['date_naissance'],$_POST['type_client'],$_POST['email_client'],$_POST['login_client'],$_POST['mot_passe']);
            $ClientC->modifierClient($user, $_GET['id_client']);
<<<<<<< HEAD
           // header('Location:../index.php');
=======
            header('Location:../index.php');
>>>>>>> 144683f7e8657a761bc3322917553d57ce103627
      }
     
	}

?>

<?php
	session_start();
	if(!isset($_SESSION["id_client"])){
    var_dump($_SESSION);    
	exit(); 
	}
?>


<!DOCTYPE html>
<html lang="en">

  <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Modification du compte client</title> 
        <link rel="stylesheet" type="text/css" href="../assets/css/main.css">  
        <link rel="stylesheet" href="../assets/css/vendor.css">
        <link rel="stylesheet" href="../assets/css/utility.css">
        <link rel="stylesheet" href="../assets/css/app.css"> 
       
  </head>

    <body>   
         <header id="header" class="fixed-top">
                <div class="container d-flex align-items-center">
<<<<<<< HEAD
                    <h5>Bienvenue <?php echo $_SESSION['nom_client'];echo $_SESSION['prenom_client'] ?></h5> 
=======
                    <h5>Bienvenue <?php echo $_SESSION['login_client']; ?></h5> 
>>>>>>> 144683f7e8657a761bc3322917553d57ce103627
                   <a href="logout.php" class="connexion-btn scr ollto">Déconnexion</a>
            </div>

        </header>
<?php
			if (isset($_GET['id_client'])){
				$user = $ClientC->recupererClient1($_GET['id_client']);	
?> 
<<<<<<< HEAD
<br>
=======

>>>>>>> 144683f7e8657a761bc3322917553d57ce103627
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

                                                <a href="Views/login_vendeur.php"><i class="fas fa-store"></i>

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
</nav>
  

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
                                        <h1 class="gl-h1">Modification du profil</h1>
                                        <div id="erreur"></div>
<<<<<<< HEAD
                                        <form class="l-f-o__form" action="" onsubmit="return verif()" method="POST" >
=======
                                        <form class="l-f-o__form" action="" method="POST" >
>>>>>>> 144683f7e8657a761bc3322917553d57ce103627
                                            <div class="gl-s-api">
                                            <div class="u-s-m-b-30">
                                            
                                                <label class="gl-label" for="nom_client">Nom*</label>

                                                <input class="input-text input-text--primary-style" type="text" id="nom_client" name="nom_client" value = "<?php echo $user->nom_client; ?>"></div>
                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="prenom_client">Prenom*</label>

                                                <input class="input-text input-text--primary-style" type="text"  id="prenom_client" name="prenom_client" value = "<?php echo $user->prenom_client; ?>"></div>
                                          
                                                <div class="u-s-m-b-30">
                                               
                                                    <label class="gl-label" for="date_naissance">Date de naissance*</label>
                                                       
                                                    <input class="input-text input-text--primary-style" type="date" id="date_naissance"name="date_naissance"  value = "<?php echo $user->date_naissance; ?>"></div>
                                                                               
                                                    <div class="u-s-m-b-30">

                                                    <span class="gl-label">Est ce que vous voulez étre un client ou vendeur*</span>
                                                     <select class="select-box select-box--primary-style"  id="type_client" name="type_client"  size="1">
                                                     <option value="Client">Client</option>
                                                     <option value="Vendeur">Vendeur</option> </select> 
                                                    </div>

                                            <div class="u-s-m-b-30">

                                                <label class="gl-label" for="email_client">E-MAIL*</label>

<<<<<<< HEAD
                                                <input class="input-text input-text--primary-style" type="email" id="email_client" name="email_client" value = "<?php echo $user->email_client; ?>"></div>
=======
                                                <input class="input-text input-text--primary-style" type="email" id="email_client" name="email_client" pattern=".+@gmail.com|.+@esprit.tn|.+@yahoo.com|.+@yahoo.fr|.+@outlook.fr"  value = "<?php echo $user->email_client; ?>"></div>
>>>>>>> 144683f7e8657a761bc3322917553d57ce103627
                                            
                                                <div class="u-s-m-b-30">

                                                <label class="gl-label" for="login_client">Login*</label>

                                                <input class="input-text input-text--primary-style" type="text" id="login_client" name="login_client" value = "<?php echo $user->login_client; ?>"></div>             
                                            
                                        <div class="u-s-m-b-30">

                                                <label class="gl-label" for="mot_passe">Mot de passe*</label>

                                                <input class="input-text input-text--primary-style" type="password" id="mot_passe"name="mot_passe" value = "<?php echo $user->mot_passe; ?>"></div>  
                                                

                                            <div class="u-s-m-b-15">

<<<<<<< HEAD
                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">Envoyer</button></div>
=======
                                                <button class="btn btn--e-transparent-brand-b-2" type="submit" onclick="verif();">Envoyer</button></div>
>>>>>>> 144683f7e8657a761bc3322917553d57ce103627

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
            </div>
         
        </div>

	<?php
    }
    ?>


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

  
    </body>
</html>


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
    
<<<<<<< HEAD
    <script src="../assets/js/script2.js"></script>
=======
    <script src="../assets/js/script.js"></script>
>>>>>>> 144683f7e8657a761bc3322917553d57ce103627
