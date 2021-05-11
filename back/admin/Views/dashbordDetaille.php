<?PHP

include "../Controller/reclamationC.php";
include "../Model/reclamationE.php";
include "sendmail.php";
$reclamation1C=new ReclamationC();
$result=$reclamation1C->recupererReclamation($_GET['date_creation']);
$bouton="Répondre";

    foreach($result as $row){
        $type=$row['descri'];
        $description=$row['description'];
        $date_creation=$row['date_creation'];
        $etat=$row['etat'];
        $reponse=$row['reponse'];
        $mail2=$row['mail'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Page Admin</title>

    <!-- Fontfaces CSS-->

    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">



    <!-- Vendor CSS-->
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet"
        media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">


    <!-- Bootstrap CSS-->
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all">
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">

</head>

<body class="animsition">

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="../assets/images/icon/logo.png" alt="Animaliaplus" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">

                                <a href="index.html">Dashboard</a>

                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../assets/images/icon/logo.png" alt="Animaliaplus" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="Views/showadmin.php">Gestion des administrateurs</a>
                                </li>
                                <li>
                                    <a href="#">Gestion des vendeurs</a>
                                </li>
                                <li>
                                    <a href="views/showClient.php">Gestion des clients</a>
                                </li>
                                <li>
                                    <a href="#">Gestion des reclamations</a>
                                </li>
                                <li>
                                    <a href="#">Gestion des avis</a>
                                </li>
                            </ul>
                        </li>

                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Produits</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#">Gestion des Animaux</a>
                                </li>
                                <li>
                                    <a href="afficher_plante.php">Gestion des Plantes</a>
                                </li>
                                <li>
                                    <a href="#">Gestion des alimentation</a>
                                </li>
                            </ul>
                        </li>

                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Categories</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#">Categorie Animaux</a>
                                </li>
                                <li>
                                    <a href="afficher_categorie_plante.php">Categorie Plantes</a>
                                </li>
                                <li>
                                    <a href="#">Categorie alimentation</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="music2.php">
                                <i class="far fa-calendar-alt"></i>Espace musique</a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>

                        <li>
                            <a href="qr_generator.php">
                                <i class="fas fa-map-marker-alt"></i>QR</a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>



        <div class="page-container">

            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="recherche_admin.php" method="POST">
                                <input class="au-input au-input--xl" type="text" name="nom_administrateur"
                                    placeholder="Search for datas &amp; reports..." />
                                <input class="au-btn--submit" type="submit" value="Recherche" name="search">
                                <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>

                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="../assets/images/icon/avatar-01.jpg" alt="MohamedRahal" />
                                    </div>
                                    <div class="content">
                                        <h5>Bienvenue <?php echo $_SESSION['nom_administrateur']; ?></h5>
                                        <a href="../admin/Views/logout.php">Déconnexion</a>
                                        <a
                                            href="../Views/modifierAdmin.php?id_admin=<?PHP echo $_SESSION['id_admin']; ?>">
                                            Modifier </a>


                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="../assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">Animaliaplus</a>
                                                </h5>
                                                <span class="email">contact@animaliplus.net</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Settings</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="#">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
            </header>

            <!-- Espace integrations -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Gestion des </h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">

                                </div>
                            </div>
                        </div>
                        <button><a href="../index.php">Retour</a></button>


                        <h3>type</h3>
            <h5><?PHP echo $type ?></h5>
            <h3>Texte</h3>
            <h5><?PHP echo $description ?></h5>
            <h3>L'etat de la réclamation</h3>
            <h5><?PHP echo $etat ?></h5>
            <h3><?PHP echo $mail2 ?></h3>
            <div>
							<script language="javascript" type="text/javascript">
									function calculeLongueur(){
   										var iLongueur, iLongueurRestante;
   										iLongueur = document.getElementById('repons').value.length;
   										if (iLongueur>30) {
     							    	document.getElementById('repons').value = document.getElementById('repons').value.substring(0,300);
      									iLongueurRestante = 0;
   										}
   										else {
     							 		iLongueurRestante = 300 - iLongueur;
   									}
   									if (iLongueurRestante <= 1)
      								document.getElementById('indic').innerHTML = iLongueurRestante + "&nbsp;caract&egrave;re&nbsp;disponible";
   									else
      								document.getElementById('indic').innerHTML = iLongueurRestante + "&nbsp;caract&egrave;res&nbsp;disponibles";
									}
 
							</script>

           
            <?php 
            }
            
                    ?>
                    
                    <?PHP
                
            
            if (isset($_POST['envoyer']))
            {

                $reclamation=new Reclamation($type,$description,$date_creation,"traitée","",$_POST['repons'],$mail,$type);
                $reclamation1C->modifierReclamation($reclamation,$date_creation);
                $mail->addAddress($mail2,'iheb');
                $mail->send();
                
              /* use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

try{

    $mail->SMTPDebug =1;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'berraiesiheb4@gmail.com';
    $mail->Password ='houbahoubi19961';
    $mail->SMTPSecure ='tls';
    $mail->Port=587;
    $mail->setFrom('berraiesiheb4@gmail.com','Mailer');
    $mail->addAddress('berraiesiheb4@gmail.com','user');
    $body='<p><strong>MAIL</strong></p>';
    $mail->isHTML(true);
    $mail->Subject=$_POST['repons'];
    $mail->Body=$body;
    $mail->AltBody=strip_tags($body);
    $mail->send();
} catch(Exception $e) {
    echo 'message could not be sent';
    
}*/




            ?>

            <script>
                document.location.replace("dashbordReclamation.php") ;
            </script>

            }

                    <?php
                }
            ?>
            <?PHP
            
            if($etat=="traitée")
                {
                    $bouton="Modifier"
            ?>

            <h3>Votre réponse</h3>
            <h5><?PHP echo $reponse ?></h5>
                    <?php
                }
            ?>   
            <form  method= "POST" >
                    <label>
                      <textarea onblur="calculeLongueur();" onfocus="calculeLongueur();" onkeydown="calculeLongueur();" onkeyup="calculeLongueur();" name="repons" id="repons" ></textarea>
                    </label>
                        <label>
                            <input type="submit" value=<?php echo $bouton ?> name="envoyer">
                        </label>
                        
                    </form>                                      











                        <!-- Jquery JS-->
                        <script src="../assets/vendor/jquery-3.2.1.min.js"></script>
                        <!-- Bootstrap JS-->
                        <script src="../assets/vendor/bootstrap-4.1/popper.min.js"></script>
                        <script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
                        <!-- Vendor JS       -->
                        <script src="../assets/vendor/slick/slick.min.js">
                        </script>
                        <script src="../assets/vendor/wow/wow.min.js"></script>
                        <script src="../assets/vendor/animsition/animsition.min.js"></script>
                        <script src="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
                        </script>
                        <script src="../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
                        <script src="../assets/vendor/counter-up/jquery.counterup.min.js">
                        </script>
                        <script src="../assets/vendor/circle-progress/circle-progress.min.js"></script>
                        <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
                        <script src="../assets/vendor/chartjs/Chart.bundle.min.js"></script>
                        <script src="../assets/vendor/select2/select2.min.js">
                        </script>

                        <!-- Main JS-->
                        <script src="../assets/js/main.js"></script>

</body>

</html>