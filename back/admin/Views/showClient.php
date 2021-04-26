<?php
include "../Controller/ClientC.php";

$ClientC = new ClientC();
$clients = $ClientC->afficherclient();

?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Afficher la liste des Clients</title>
		<link href="../assets/css/styles.css" rel="stylesheet"/>
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous">
		<link href="../assets/css/font-face.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
   
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all"> 
	<link href="../assets/css/theme.css" rel="stylesheet" media="all">

    </head> 
	
	
	<br>
	<h5 align="center">Gestion des Clients<h5>
	
	<body class="animsition"> 
	<button class="btn btn-light"><a href="..index.php">Retour</a></button>
			<div class="card-body"> 
			<div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Liste des comptes clients 
                            </div>
                    <div class="table-responsive">
                          <table class="table table-bordered" id="dataTable" width="5%" cellspacing="0">
                                    <thead>
                                    <tr>
									<th>id_client</th>
									<th>Nom</th>
									<th>Prenom</th>
                					<th>Date de naissance</th>
                					<th>telephone</th>
									<th>Email</th>
									<th>Login</th>
                					<th>Mot de passe</th>
                					<th>id_admin</th>
									<th>supprimer</th>
									</tr>		
			<?php
				foreach($clients as $user){
			?>
				<tr>
					<td><?PHP echo $user['id_client']; ?></td>
					<td><?PHP echo $user['nom_client']; ?></td>
					<td><?PHP echo $user['prenom_client']; ?></td> 
                    <td><?PHP echo $user['date_naissance']; ?></td> 
                    <td><?PHP echo $user['type_client']; ?></td> 
					<td><?PHP echo $user['email_client']; ?></td>
					<td><?PHP echo $user['login_client']; ?></td> 
                    <td><?PHP echo $user['mot_passe']; ?></td> 
                    <td><?PHP echo $user['id_admin']; ?></td> 
					<td>
						<form method="POST" action="supprimerClient.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id_client']; ?> name="id_client">
						</form>
					</td>
				
				</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>