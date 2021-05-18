<?php
include '../Controller/ForumC.php';


$var=new Commentaire($_POST['commentaire']);
$var2=new ForumC();
$var2->ajouterCommentaire($var,$_POST['id_client'],$_POST['id_publication'],$_POST['nom_client']);
?>