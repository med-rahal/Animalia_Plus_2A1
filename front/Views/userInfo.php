<?php
        session_start();
       # print_r($_SESSION['user']);
?> 

<html> 
<head> 

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

 </head> 
 <body>  
 <br><br>
<div class="container-fluid well span6">
	<div class="row-fluid">
        <div class="span2" >
		    <img src="<?=$_SESSION['user']['picture'];?>" class="img-circle">
        </div>
        
        <div class="span8">
            <h3><?=$_SESSION['user']['family_name'];?></h3>
            <h6><?=$_SESSION['user']['given_name'];?></h6>
            <h6><?=$_SESSION['user']['email'];?></h6>
        </div>
        
        <div class="span2">
               <a href ="../Views/forum.php">Continue</a>
                 <a href ="logout.php">Deconnexion</a>
             </div>
        </div>
</div>
    </body> 
</html>



   
