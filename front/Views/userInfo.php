<?php
        session_start();
       # print_r($_SESSION['user']);
?> 

<html> 
<head> 

 </head> 
 <body> 
    <div class="container"> 
        <div class="row" id="profile" style="background" > 
            <div class="col-md-4 col-md-offset-2 vbottom"> 
            <img id="pPicture" src="<?=$_SESSION['user']['picture'];?>" class="img-circle"> 
            </div> 
            <div class="col-md-5 vbottom"> 
             <p><strong><?=$_SESSION['user']['family_name'];?></strong></p> 
             <p><strong><?=$_SESSION['user']['given_name'];?></strong></p> 
             <p><strong><?=$_SESSION['user']['email'];?></strong></p> 
             </div> 

             <div class="col-md5"> 
             <a href ="../Views/forum.php">Continue</a> 
            </div>
            <div class="col-md1"> 
             <a href ="logout.php">Logout</a> 
            </div> 
         </div> 
    </div> 
</body> 
</htm>   
