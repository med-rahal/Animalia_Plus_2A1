<?php
//include "C:/xampp2/htdocs/projetweb/dashbordDetaille.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';
try{
   
    $mail = new PHPMailer(true);
    //$mail->SMTPDebug =1;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password ='';
    $mail->SMTPSecure ='tls';
    $mail->Port=587;
    $mail->setFrom('','ANIMALIA');
    
    $body='<p><strong>MAIL</strong></p>';
    $mail->isHTML(true);
    $mail->Subject='animalia reclamation';
    $mail->Body=$_POST['repons'];
    $mail->AltBody=strip_tags($body);
    
    
} catch(Exception $e) {
    echo 'message could not be sent';
    
}

//PHPMailer Object
 //Argument true in constructor enables exceptions


?>