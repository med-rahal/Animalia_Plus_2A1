<?php

	session_start();

	if(!isset($_SESSION["id_client"])){
    var_dump($_SESSION);
		//header("Location: views/login.php");
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
        <link href="../assets/css/style1.css" rel="stylesheet">
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
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<!-- blog-details-area-start -->
							<div class="blog-details-area mb-40-2">
									<?php 
											include_once '../Controller/ForumC.php';
										
											$pub=new ForumC();
							    			$result=$pub->recupererPublication($_GET['id']);
							    			$pubs=$pub->afficherPublication();
							    			$max=$pub->maxPublication();
							    			$min=$pub->minPublication();
											$commentaire=$pub->recupererCommentaire($_GET['id']);
											$number_of_rows = $commentaire->rowCount(); 
											foreach ($max as $val1) {
											$max1=$val1['max_publication'];
											}
											foreach ($min as $val1) {
											$min1=$val1['min_publication'];
                                            }
											foreach ($result as $val) {?>
								<h3><a href="#"><?php echo $val['categorie'];?></a></h3>
								<div class="blog-info">
									<h3><a href="#"><?php echo $val['titre'];?></a></h3>
									<p><?php echo $val['publication'];?>
									<p><?php echo $_SESSION['login_client']; ?>
									<br />
																
									<div class="user-info">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="cats-tags-wrap mb-3">
													<i class="fa fa-list-alt"></i>Categories: <a href="#"><?php echo $val['categorie'];?></a>
												</div>
											</div>
											<?php } $id=$_GET['id'];?>		
										</div>
									</div>
									<div class="next-prev-area">
										<a href="<?php  if($id-1<$min1) {$id=$min1; echo "forum_contenu.php?id=".$id=$id;} else echo "forum_contenu.php?id=".$id=$id-1;  ?>" class="next"><i class="fa fa-angle-left"></i>publication précédente</a>
										<a href="<?php echo "forum_contenu.php?id=".$id=$id+1; if($max1<$id) $id=$max1;?>" class="previews">publication suivante <i class="fa fa-angle-right"></i></a>
									</div>
								</div>
							
								<div class="comments-area mt-40">
								
									<?php 
									
									foreach ($commentaire as $val2) {
										?>
			
									<div class="single-comments single-comments-2">
										<div class="comment-img">
											<img src="../assets/images/blog/avatar.jpg" width="40" alt="client" />
										</div>
										<div class="comment-text">
											<a href="#"><?php echo $val2['nom']; ?></a>
											<?php 
											$timeadd=$val2['date_com'];
                                            $date1 = date('Y-m-d',strtotime($timeadd));
                                            $time1 = date('H:i',strtotime($timeadd));
                                            $date1 = explode('-', $date1);
                                            $year = $date1[0];
                                            $month   = $date1[1];
                                            $day  = $date1[2];
                                            $monthName = date("F", mktime(0, 0, 0, $month, 10));?>
											<span><?php echo $monthName." ".$day.", ".$year." at ".$time1; ?></span>
											<p><?php echo $val2['commentaire']; ?></p>
											
								</div>
									</div>
									<?php } ?>
								
								</div>
							
							
								<div class="comment-respond-area mb-3">
									<h3>Entrez Votre Commentaire</h3>
									<div class="single-form">
										<form action="ajouter_commentaire.php" method="POST">
											<textarea name="commentaire" id="commentaire" cols="30" rows="10" placeholder="Entrez votre commentaire *"></textarea>
											<input name="id_client"  type="hidden" value="<?php echo $_SESSION['id_client']; ?>" />
											<input name="id_publication"  type="hidden" value="<?php echo $_GET['id']; ?>" />
											<input name="nom_client"  type="hidden" value="<?php echo $_SESSION['login_client']; ?>" />

									</div>
									
									<div class="single-register">
									<input type="submit" class="confirmer" value="Comment">
								</div>
									</form>
								</div>
								
							</div>
							
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						
							<div class="blog-right-area">
							
								<div class="blog-right mb-50 mb-3">
									<form action="#">
										<input type="text" placeholder="Rechercher"/>
										<button type="submit"><i class="fa fa-search"></i></button>
									</form>
								</div>
							
								<div class="blog-right mb-50 mb-3">
									<h3>Publication Recente</h3>
									<div class="sidebar-post">
										
		
										<?php foreach ($pubs as $row) {?>
									
										<div class="single-post">
											<div class="post-img">
												<a href="#"><img width="40" src="<?php echo $row['image']; ?>" alt="post" /></a>
											</div>
											<div class="post-text">
												<h4><a href="#"><?php echo $row['titre']; ?></a></h4>
												<?php 
											$timeadd=$row['date_publication'];
                                            $date1 = date('Y-m-d',strtotime($timeadd));
                                            $time1 = date('H:i',strtotime($timeadd));
                                            $date1 = explode('-', $date1);
                                            $year = $date1[0];
                                            $month   = $date1[1];
                                            $day  = $date1[2];
                                            $monthName = date("F", mktime(0, 0, 0, $month, 10));?>
											<span><?php echo $monthName." ".$day.", ".$year; ?></span>
												
											</div>

										</div>
										<?php } ?>
										
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


    </body> 

</html>




