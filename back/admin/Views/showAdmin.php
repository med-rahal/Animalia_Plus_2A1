<?php
include "../Controller/AdminC.php";
$AdminC = new AdminC(); 
$admins = $AdminC->afficheradministrateur();
session_start();
?>
<html>
	<head> 
		<meta charset="UTF-8">
		<title> Afficher la liste des administrateurs</title>
		

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
	<br>
	<h5 align="center">Gestion des administrateurs<h5>
	<body class="animsition"> 

	<button class="btn btn-light"><a href="../index.php">Retour</a></button>
                        <div class="card mb-4">
							<div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Liste des comptes administrateurs
                            </div>



			<div class="card-body">
                    <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="5%" cellspacing="0">
                                    <thead>
                                    <tr>
											<th>Id</th>
											<th>Nom Administrateur</th> 
											<th>Mot de passe</th> 
											<th>Modifier</th>
											<th>Supprimer</th>
		
									</tr>
			<?PHP
				foreach($admins as $user){
			?>
				<tr>
					<td><?PHP echo $user['id_admin']; ?></td>
					<td><?PHP echo $user['nom_administrateur']; ?></td>
					<td><?PHP echo $user['mot_passe']; ?></td>
	
					<td>

						<a type="button" class="btn btn-primary shop-item-button" href = "modifierAdmin.php?id_admin=<?= $user['id_admin'] ?>">Modifier</a>
					</td>
					<td>
						<form method="POST" action="supprimerAdmin.php">
						<input type="submit" class="btn btn-primary shop-item-button"  name="supprimer" value="supprimer"> 
					
						</form>
					</td>
					



				</tr>
			<?PHP
				}
			?>

</tbody>
                                    </table>
                                </div>
                            </div> 
			</body> 
</html>	

<script src="../assets/js/main.js"></script>
    <!-- Bootstrap JS-->

    <!-- Main JS-->
    <script src="../assets/js/main.js"></script>
   


    





























		


		