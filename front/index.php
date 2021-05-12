<?php
    
    session_start();
    if(!isset($_SESSION["id_client"])){
        var_dump($_SESSION);
		header("Location:Views/login_client.php");
		exit(); 
    }
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

    <link rel="stylesheet" href="assets/css/vendor.css">

    <link rel="stylesheet" href="assets/css/utility.css">

    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body class="config">
 
    <div id="application">

        <header class="header--style-1">
<div class="container d-flex align-items-center">
<h5>Bienvenue <?php echo $_SESSION['login_client']; ?></h5>
  <a href="../front/views/modifierClient.php?id_client=<?PHP echo $_SESSION['id_client']; ?>" > Modifier </a>
    <a href="../front/Views/logout.php">Déconnexion</a>
</div>
    
            <nav class="primary-nav primary-nav-wrapper--border">
                <div class="container">

                    <div class="primary-nav">

                        <a class="main-logo" href="index.php">

                            <img src="assets/images/logo/logo.png" alt="logo animliaplus"></a>

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

                                                <a href="Views/login.php"><i class="fas fa-user-circle u-s-m-r-6"></i>

                                                    <span>Espace administrateur</span></a></li>
                                            <li>

                                                <a href="Views/login_client.php"><i class="fas fa-user-friends"></i></i>

                                                    <span>Espace client</span></a></li>
                                         
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
                                <a href="#aboutus">find us</a>




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
                                    <h1 class="">NOS PRODUITS</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 u-s-m-b-30">

                                <a class="collection" href="shop-side-version-2.html">
                                    <div class="aspect aspect--bg-grey aspect--square">

                                        <img class="aspect__img collection__img" src="assets/images/animau.jpg" alt=""></div>
                                </a></div>
                            <div class="col-lg-7 col-md-7 u-s-m-b-30">

                                <a class="collection" href="Views/afficher_plante.php">
                                    <div class="aspect aspect--bg-grey aspect--1286-890">

                                        <img class="aspect__img collection__img" src="assets/images/plante.jpg" alt=""></div>
                                </a></div>
                            <div class="col-lg-7 col-md-7 u-s-m-b-30">

                                <a class="collection" href="Views/gestion_alimentation.php">
                                    <div class="aspect aspect--bg-grey aspect--1286-890">

                                        <img class="aspect__img collection__img" src="assets/images/alimentationn.jpg" alt=""></div>
                                </a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--====== Section Content ======-->
            </div>
            <!--====== End - Section 1 ======-->





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


        <!--====== Quick Look Modal ======-->
        <div class="modal fade" id="quick-look">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">

                                <!--====== Product Breadcrumb ======-->
                                <div class="pd-breadcrumb u-s-m-b-30">
                                    <ul class="pd-breadcrumb__list">
                                        <li class="has-separator">

                                            <a href="index.hml">Home</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">Electronics</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">DSLR Cameras</a></li>
                                        <li class="is-marked">

                                            <a href="shop-side-version-2.html">Nikon Cameras</a></li>
                                    </ul>
                                </div>
                                <!--====== End - Product Breadcrumb ======-->


                                <!--====== Product Detail ======-->
                                <div class="pd u-s-m-b-30">
                                    <div class="pd-wrap">
                                        <div id="js-product-detail-modal">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-2.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-3.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-4.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-5.jpg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-t-15">
                                        <div id="js-product-detail-modal-thumbnail">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-2.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-3.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-4.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-5.jpg" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Product Detail ======-->
                            </div>
                            <div class="col-lg-7">

                                <!--====== Product Right Side Details ======-->
                                <div class="pd-detail">
                                    <div>

                                        <span class="pd-detail__name">Nikon Camera 4k Lens Zoom Pro</span></div>
                                    <div>
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__price">$6.99</span>

                                            <span class="pd-detail__discount">(76% OFF)</span><del class="pd-detail__del">$28.97</del></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                            <span class="pd-detail__review u-s-m-l-4">

                                                <a href="product-detail.html">23 Reviews</a></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__stock">200 in stock</span>

                                            <span class="pd-detail__left">Only 2 left</span></div>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                                <a href="signin.html">Add to Wishlist</a>

                                                <span class="pd-detail__click-count">(222)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>

                                                <a href="signin.html">Email me When the price drops</a>

                                                <span class="pd-detail__click-count">(20)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <ul class="pd-social-list">
                                            <li>

                                                <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li>

                                                <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li>

                                                <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li>

                                                <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a></li>
                                            <li>

                                                <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <form class="pd-detail__form">
                                            <div class="pd-detail-inline-2">
                                                <div class="u-s-m-b-15">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <span class="input-counter__minus fas fa-minus"></span>

                                                        <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">

                                                        <span class="input-counter__plus fas fa-plus"></span></div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <button class="btn btn--e-brand-b-2" type="submit">Add to Cart</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                        <ul class="pd-detail__policy-list">
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Buyer Protection.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Full Refund if you don't receive your order.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Returns accepted if product not as described.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Product Right Side Details ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Quick Look Modal ======-->


        <!--====== Add to Cart Modal ======-->
        <div class="modal fade" id="add-to-cart">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-radius modal-shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="success u-s-m-b-30">
                                    <div class="success__text-wrap"><i class="fas fa-check"></i>

                                        <span>Item is added successfully!</span></div>
                                    <div class="success__img-wrap">

                                        <img class="u-img-fluid" src="images/product/electronic/product1.jpg" alt=""></div>
                                    <div class="success__info-wrap">

                                        <span class="success__name">Beats Bomb Wireless Headphone</span>

                                        <span class="success__quantity">Quantity: 1</span>

                                        <span class="success__price">$170.00</span></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="s-option">

                                    <span class="s-option__text">1 item (s) in your cart</span>
                                    <div class="s-option__link-box">

                                        <a class="s-option__link btn--e-white-brand-shadow" data-dismiss="modal">CONTINUE SHOPPING</a>

                                        <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">VIEW CART</a>

                                        <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED TO CHECKOUT</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Add to Cart Modal ======-->


        <!--====== Newsletter Subscribe Modal ======-->
        <div class="modal fade new-l" id="newsletter-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn new-l__dismiss fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row u-s-m-x-0">
                            <div class="col-lg-6 new-l__col-1 u-s-p-x-0">

                                <a class="new-l__img-wrap u-d-block" href="shop-side-version-2.html">

                                    <img class="u-img-fluid u-d-block" src="assets/images/newsletter/newsletter.jpg" alt=""></a></div>
                            <div class="col-lg-6 new-l__col-2">
                                <div class="new-l__section u-s-m-t-30">
                                    <div class="u-s-m-b-8 new-l--center">
                                        <h3 class="new-l__h3">Newsletter</h3>
                                    </div>
                                    <div class="u-s-m-b-30 new-l--center">
                                        <p class="new-l__p1">Sign up for emails to get the scoop on new arrivals, special sales and more.</p>
                                    </div>
                                    <form class="new-l__form">
                                        <div class="u-s-m-b-15">

                                            <input class="news-l__input" type="text" placeholder="E-mail Address"></div>
                                        <div class="u-s-m-b-15">

                                            <button class="btn btn--e-brand-b-2" type="submit">Sign up!</button></div>
                                    </form>
                                    <div class="u-s-m-b-15 new-l--center">
                                        <p class="new-l__p2">By Signing up, you agree to receive Reshop offers,<br />promotions and other commercial messages. You may unsubscribe at any time.</p>
                                    </div>
                                    <div class="u-s-m-b-15 new-l--center">

                                        <a class="new-l__link" data-dismiss="modal">No Thanks</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Newsletter Subscribe Modal ======-->
        <!--====== End - Modal Section ======-->
    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
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
    <script src="assets/js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="assets/js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="assets/js/app.js"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>
</html>