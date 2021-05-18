<?php

	session_start();
	if(!isset($_SESSION["id_client"])){
        var_dump($_SESSION);
		header("Location:../Views/login_client.php");
		exit(); 
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
        <link rel="stylesheet" href="../assets/css/style1.css"> 
  </head>

    <body>  

 
<div id="application">


<div class="container d-flex align-items-center">
<h5>Bienvenue <?php echo $_SESSION['login_client']; ?></h5>
<a href="../views/modifierClient.php?id_client=<?PHP echo $_SESSION['id_client']; ?>" > Modifier </a>
<a href="../Views/logout.php">Déconnexion</a>

</div>
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


        <div class="shop-main-area">
			
				<div class="cart-main-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-10">
								<div class="contact-form">
									<h3><i class="fa fa-envelope-o"></i>Publication</h3>
									<form name="formulaire" action="ajouter_publication.php" method="POST">
									<div class="row">
										<div class="col-lg-12">
												<div class="checkout-form-list">
													<input type="text"  name="titre" id="titre"  placeholder="Titre du Publication" />
													<input name="id_client"  type="hidden" value="<?php echo $_SESSION['id_client']; ?>" />
											</div>
										</div>
										
									<div class="col-lg-12 ">
											<div class="country-select">
												
												<select name="categorie" id="categorie" class="chosen-select" tabindex="1" style="width:100%;" data-placeholder="Default Sorting">
													<option >Selectioner Une Categorie</option>
													<option value="Aide">Aide</option>
													<option value="Feedback">Feedback</option>
													<option value="Questions">Questions</option> 
                                                    <option value="General">General</option> 

												</select>
											</div>

									</div>
									
									<div class="col-lg-12 ">
											<div class="checkout-form-list">
										
											<textarea  cols="130" rows="4"  name="publication" placeholder="Publication"></textarea>
									</div>
									</div>	
									</div>
									<div class="single-register">
											<input class="confirmer" type="submit" value="envoyer">
									</div>
									</form>
								</div>	
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

    </body> 
</html>