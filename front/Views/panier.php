<?php 


session_start();

$total=0;

$conn = new PDO("mysql:host=localhost;dbname=animalia", 'root', '');		
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$action = isset($_GET['action'])?$_GET['action']:"";


if($action=='addcart' && $_SERVER['REQUEST_METHOD']=='POST' &&  $_POST['ref_alimentation']) {
	
    
	$query = "SELECT * FROM alimentation WHERE ref_alimentation=:ref_alimentation";
	$stmt = $conn->prepare($query);
	$stmt->bindParam('ref_alimentation', $_POST['ref_alimentation']);
	$stmt->execute();
	$product = $stmt->fetch(); 

    $currentQty = $_SESSION['alimentation'][$_POST['ref_alimentation']]['qty']+1; 
	$_SESSION['alimentation'][$_POST['ref_alimentation']] =array('qty'=>$currentQty,'nom'=>$product['nom_alimentation'],'image'=>$product['image'],'prix'=>$product['prix']);
	$product='';
	header("Location:panier.php"); 

}  

  
if($action=='emptyall') {
	$_SESSION['alimentation'] =array();
	header("Location:panier.php");	
}


if($action=='empty'){
	$ref= $_GET['ref_alimentation'];
	$products = $_SESSION['alimentation'];
	unset($products[$ref]);
	$_SESSION['alimentation']= $products;
	header("Location:panier.php");	
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Panier</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="width:600px;">
  <?php if(!empty($_SESSION['alimentation'])):?>
  <nav class="navbar navbar-inverse" style="background:#04B745;">
    <div class="container-fluid pull-left" style="width:300px;">
      <div class="navbar-header"> <a class="navbar-brand" href="#" style="color:#FFFFFF;">Panier</a> </div>
    </div>
    <div class="pull-right" style="margin-top:7px;margin-right:7px;"><a href="panier.php?action=emptyall" class="btn btn-info">Panier vide</a></div>
  </nav>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Image</th>
        <th>Nom</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Actions</th>
      </tr>
    </thead>
    <?php foreach($_SESSION['alimentation'] as $key=>$product):
    ?> 
    <tr>
      <td><img src="../assets/images/products/<?php print $product['image']?>" width="50"></td>
      <td><?php print $product['nom']?></td>
      <td><?php print $product['prix']?>DT</td>
      <td><?php print $product['qty']?></td>
      <td><a href="panier.php?action=empty&ref_alimentation=<?php print $key?>" class="btn btn-info">supprimer</a></td>
    </tr>
    <?php $total+=$product['qty']* $product['prix'];?>
    <?php endforeach;?>
    <tr><td colspan="5" align="right"><h4>Total:<?php print $total?>DT</h4></td></tr>
  </table>
  <?php 
  endif;
  ?>  
</body>
</html>