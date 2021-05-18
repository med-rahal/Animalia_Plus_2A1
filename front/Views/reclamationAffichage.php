<?PHP

include "../Controller/reclamationC.php";

		$reclamation1C=new ReclamationC();	
		$listeReclamations=$reclamation1C->afficherReclamations();

?>

<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Animalia plus e-commerce site</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/vendor.css">

    <link rel="stylesheet" href="../assets/css/utility.css">

    <link rel="stylesheet" href="../assets/css/app.css">
   
	<link href="../assets/css/lib2/css/style.css" rel="stylesheet" type="text/css" media="all" />	
	<link href="../assets/css/lib2/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
	
	<script src="js/simpleCart.min.js"> </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
 <!--====== dark mode -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
      padding: 10px;
      background-color: white;
      color: black;
      font-size: 10px;
    }
    
    .dark-mode {
      background-color: black;
      color: white;
    }
    </style>


</head>

<body class="config">
    <div id="google_translate_element"></div>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: 'en'
                },
                'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementIni
t"></script>




    <button onclick="myFunction()">Toggle dark mode</button>
    <script>
    function myFunction() {
       var element = document.body;
       element.classList.toggle("dark-mode");
    }
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>



    <nav class="primary-nav primary-nav-wrapper--border">
        <div class="container">

            <div class="primary-nav">


                <a class="main-logo" href="index.html">

                    <img src="../assets/images/logo/logo.png" alt="logo animliaplus"></a>

                <form class="main-form">

                    <label for="main-search"></label>

                    <input class="input-text input-text--border-radius input-text--style-1" type="text" id="main-search"
                        placeholder="rechercher">

                    <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button></form>

                <div class="ah-lg-mode">

                    <span class="ah-close">✕ Close</span>

                    <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                        <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

                            <a><i class="far fa-user-circle"></i></a>

                            <span class="js-menu-toggle"></span>
                            <ul style="width:200px">
                                <li>

                                    <a href="Views/login.php"><i class="fas fa-user-circle u-s-m-r-6"></i>

                                        <span>Espace administrateur</span></a></li>
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


    <!--====== Nav 2 ======-->
    <nav class="secondary-nav-wrapper">
        <div class="container">

            <!--====== Secondary Nav ======-->
            <div class="secondary-nav">

                <!--====== Dropdown Main plugin ======-->



                <div class="menu-init" id="navigation2">

                    <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog"
                        type="button"></button>


                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>


                        <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
                            <li class="has-dropdown">
                                <br>
                                <a href="reclamation.php">produits<i class="fas fa-angle-down u-s-m-l-6"></i></a>



                                <span></span>
                                <ul>
                                    <li>

                                        <a href="reclamation.php">Plantes</a>

                                        <span class="js-menu-toggle"></span>


                                    </li>
                                    <li>

                                        <a href="reclamationAffichage.php">Animaux</a>

                                        <span class="js-menu-toggle"></span>


                                    </li>

                                    <li>

                                        <a href="reclamationAffichage.php">Alimentation</a>

                                        <span class="js-menu-toggle"></span>


                                    </li>


                                </ul>


                            </li>
                            <li>
                                <span></span>

                                <a href="../index.php">Acceuil</a>
                                <a href="login_client.php">Connexion</a>
                                <a href="connexion.php">Inscription</a>
                                <a href="#panier">Panier</a>
                                <a href="map.php">Find us</a>




                            <li class="has-dropdown">

                                <a href="reclamation.php">Réclamations<i class="fas fa-angle-down u-s-m-l-6"></i></a>



                                <span></span>
                                <ul>
                                    <li>

                                        <a href="reclamation.php">Faire une réclamation</a>

                                        <span class="js-menu-toggle"></span>


                                    </li>
                                    <li>

                                        <a href="reclamationAffichage.php">Consulter réclamations</a>

                                        <span class="js-menu-toggle"></span>


                                    </li>




                                </ul>


                            </li>
                        </ul>

                    </div>

                </div>



                <div class="menu-init" id="navigation3">

                    <button
                        class="btn btn--icon toggle-button toggle-button--secondary fas fa-shopping-bag toggle-button-shop"
                        type="button"></button>

                    <span class="total-item-round">2</span>


                    <div class="ah-lg-mode">

                        <span class="ah-close">✕ Close</span>

                        <!--====== List ======-->
                        <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
                            <li>

                                <a href="index.html"><i class="fas fa-home u-c-brand"></i></a></li>
                            <li>

                                <a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                            <li class="has-dropdown">

                                <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>

                                    <span class="total-item-round">2</span></a>

                                <!--====== Dropdown ======-->

                                <span class="js-menu-toggle"></span>
                                <div class="mini-cart">

                                    <!--====== Mini Product Container ======-->
                                    <div class="mini-product-container gl-scroll u-s-m-b-15">

                                        <!--====== Card for mini cart ======-->
                                        <div class="card-mini-product">
                                            <div class="mini-product">
                                                <div class="mini-product__image-wrapper">

                                                    <a class="mini-product__link" href="product-detail.html">

                                                        <img class="u-img-fluid"
                                                            src="images/product/electronic/product3.jpg" alt=""></a>
                                                </div>
                                                <div class="mini-product__info-wrapper">

                                                    <span class="mini-product__category">

                                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                                    <span class="mini-product__name">

                                                        <a href="product-detail.html">Yellow Wireless
                                                            Headphone</a></span>

                                                    <span class="mini-product__quantity">1 x</span>

                                                    <span class="mini-product__price">$8</span></div>
                                            </div>

                                            <a class="mini-product__delete-link far fa-trash-alt"></a>
                                        </div>
                                        <!--====== End - Card for mini cart ======-->


                                        <!--====== Card for mini cart ======-->
                                        <div class="card-mini-product">
                                            <div class="mini-product">
                                                <div class="mini-product__image-wrapper">

                                                    <a class="mini-product__link" href="product-detail.html">

                                                        <img class="u-img-fluid"
                                                            src="images/product/electronic/product18.jpg" alt=""></a>
                                                </div>
                                                <div class="mini-product__info-wrapper">

                                                    <span class="mini-product__category">

                                                        <a href="shop-side-version-2.html">Electronics</a></span>

                                                    <span class="mini-product__name">

                                                        <a href="product-detail.html">Nikon DSLR Camera 4k</a></span>

                                                    <span class="mini-product__quantity">1 x</span>

                                                    <span class="mini-product__price">$8</span></div>
                                            </div>

                                            <a class="mini-product__delete-link far fa-trash-alt"></a>
                                        </div>
                                        <!--====== End - Card for mini cart ======-->


                                        <!--====== Card for mini cart ======-->
                                        <div class="card-mini-product">
                                            <div class="mini-product">
                                                <div class="mini-product__image-wrapper">

                                                    <a class="mini-product__link" href="product-detail.html">

                                                        <img class="u-img-fluid" src="images/product/women/product8.jpg"
                                                            alt=""></a></div>
                                                <div class="mini-product__info-wrapper">

                                                    <span class="mini-product__category">

                                                        <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                    <span class="mini-product__name">

                                                        <a href="product-detail.html">New Dress D Nice
                                                            Elegant</a></span>

                                                    <span class="mini-product__quantity">1 x</span>

                                                    <span class="mini-product__price">$8</span></div>
                                            </div>

                                            <a class="mini-product__delete-link far fa-trash-alt"></a>
                                        </div>
                                        <!--====== End - Card for mini cart ======-->


                                        <!--====== Card for mini cart ======-->
                                        <div class="card-mini-product">
                                            <div class="mini-product">
                                                <div class="mini-product__image-wrapper">

                                                    <a class="mini-product__link" href="product-detail.html">

                                                        <img class="u-img-fluid" src="images/product/men/product8.jpg"
                                                            alt=""></a></div>
                                                <div class="mini-product__info-wrapper">

                                                    <span class="mini-product__category">

                                                        <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                    <span class="mini-product__name">

                                                        <a href="product-detail.html">New Fashion D Nice
                                                            Elegant</a></span>

                                                    <span class="mini-product__quantity">1 x</span>

                                                    <span class="mini-product__price">$8</span></div>
                                            </div>

                                            <a class="mini-product__delete-link far fa-trash-alt"></a>
                                        </div>
                                        <!--====== End - Card for mini cart ======-->
                                    </div>
                                    <!--====== End - Mini Product Container ======-->


                                    <!--====== Mini Product Statistics ======-->
                                    <div class="mini-product-stat">
                                        <div class="mini-total">

                                            <span class="subtotal-text">SUBTOTAL</span>

                                            <span class="subtotal-value">$16</span></div>
                                        <div class="mini-action">

                                            <a class="mini-link btn--e-brand-b-2" href="checkout.html">PROCEED TO
                                                CHECKOUT</a>

                                            <a class="mini-link btn--e-transparent-secondary-b-2" href="cart.html">VIEW
                                                CART</a></div>
                                    </div>
                                    <!--====== End - Mini Product Statistics ======-->
                                </div>
                                <!--====== End - Dropdown ======-->
                            </li>
                        </ul>
                        <!--====== End - List ======-->
                    </div>
                    <!--====== End - Menu ======-->
                </div>
                <!--====== End - Dropdown Main plugin ======-->
            </div>
            <!--====== End - Secondary Nav ======-->
        </div>
    </nav>
    <!--====== End - Nav 2 ======-->
    </header>
    <!--====== End - Main Header ======-->


    <!--====== App Content ======-->
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

                                    <span class="content-span-2 u-c-secondary">20% Off Pour Tous Nos Clients Fidéles
                                        !</span>

                                    <span class="content-span-3 u-c-secondary">Trouver des animaux de compagnie sur les
                                        meilleurs prix, Découvrez également les produits les plus vendus de
                                        plantes</span>

                                    <span class="content-span-4 u-c-secondary">À partir de

                                        <span class="u-c-brand">20 DT</span></span>

                                    <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">MAGASINEZ
                                        MAINTENANT</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--====== End - Primary Slider ======-->


        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">MAGASINEZ PAR OFFRES</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="u-s-p-b-60">

<div class=" cart-items">
 <h3>Consultez votre réclamation</h3>
    <!--<script>$(document).ready(function(c) {
        $('.close1').on('click', function(c){
            $('.cart-header').fadeOut('slow', function(c){
                $('.cart-header').remove();
            });
            });	  
        });
   </script>-->
<!--<script>$(document).ready(function(c) {
        $('.close2').on('click', function(c){
            $('.cart-header1').fadeOut('slow', function(c){
                $('.cart-header1').remove();
            });
            });	  
        });
   </script>-->
<div class="in-check" >
<ul class="unit">
<li><span>Supprimer</span></li>
<li><span>type</span></li>		
<li><span>Date de creation</span></li>
<li><span>Etat de traitement</span></li>
<li><span>Consulter</span></li>
<div class="clearfix"> </div>
</ul>
<?PHP
foreach($listeReclamations as $row){
?>
<ul class="cart-header">	 
<li>
   <br></br>
    <a href="reclamationSupprimer.php?date_creation=<?php echo $row['date_creation'];?>" class="supprimer">Supprimer</a></li>
<li><span><?PHP echo $row['descri']; ?></span></li>
<li> <span></span></li>
<li><span><?PHP echo $row['date_creation']; ?></span></li>
<li> <span></span></li>
<li><span><?PHP echo $row['etat']; ?></span></li>
<li> <span></span></li>
<li> <a href="reclamationDetaille.php?date_creation=<?PHP echo $row['date_creation']; ?>" class="add-cart cart-check">Consulter</a></li>
<div class="clearfix"> </div>
</ul>
<?PHP
}
?>
</div>
</div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 12 ======-->
</div>

        <!--====== Main Footer ======-->
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

                                            <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>

                                            <a class="s-youtube--color-hover" href="#"><i
                                                    class="fab fa-youtube"></i></a></li>
                                        <li>

                                            <a class="s-insta--color-hover" href="#"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li>

                                            <a class="s-gplus--color-hover" href="#"><i
                                                    class="fab fa-google-plus-g"></i></a></li>
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

                                        <input class="input-text input-text--only-white" type="text" id="newsletter"
                                            placeholder="Enter your Email">

                                        <button class="btn btn--e-brand newsletter__btn"
                                            type="submit">SUBSCRIBE</button></div>

                                    <span class="newsletter__text">Subscribe to the mailing list to receive updates on
                                        promotions, new arrivals, discount and coupons.</span>
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

                                    <span>Copyright © 2018</span>

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

        <!--====== Modal Section ======-->







        <!--====== End - Modal Section ======-->
    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function () {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="../assets/css/lib2/assets/js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="../assets/css/lib2/assets/js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="../assets/css/lib2/assets/js/app.js"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a
                                JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>

</html>