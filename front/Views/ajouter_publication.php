<?php

include '../Controller/ForumC.php'; 

$image="../assets/img/blog/avatar.jpg";
if ($_POST['categorie']=="General")
$image="../assets/img/blog/avatar-1.jpg";
else if ($_POST['categorie']=="Actualites") 
$image="../assets/img/blog/avatar-2.jpg";
else if ($_POST['categorie']=="Aide")
$image="../assets/img/blog/avatar-3.jpg";
else if ($_POST['categorie']=="Feedback")
$image="../assets/img/blog/avatar-4.jpg";
else if ($_POST['categorie']=="Questions")
$image="../assets/img/blog/questions.png";


$pub1=new Forum($_POST['titre'],$_POST['categorie'],$_POST['publication'],$image,$_POST['id_client']);
$pub2=new ForumC();
$pub2->ajouterPublication($pub2);
?>