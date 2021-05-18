<?php
    require_once('settings.php');
<<<<<<< HEAD
    include "../Controller/ClientC.php";
    include_once '../Model/Client.php';

=======
>>>>>>> 144683f7e8657a761bc3322917553d57ce103627
 
      if (isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
      
    } 
    else 
    {
        header('Location:login_client.php');
    }

    if(!isset($token["error"])){
    $oAuth= new Google_Service_Oauth2($client);
    $user = $oAuth->userinfo_v2_me->get(); 
    
<<<<<<< HEAD
    $ClientC = new ClientC();
    echo "<pre>";
    $_SESSION['nom_client']= $user->family_name;
    $_SESSION['prenom_client']= $user->given_name ;  
    $_SESSION['email_client'] = $user->email;
    $_SESSION['picture'] = $user->picture;   
   
    $id_client=implode($ClientC->getIDClientByEmail($user->email));
    $user->id=$id_client;
    $_SESSION['id_client']=$user->id;

     header('Location:../index.php');
     #header('Location:../userInfo.php');
=======
    echo "<pre>";
    $userData['family_name'] = $user->family_name; 
    $userData['given_name'] = $user->given_name; 
    $userData['email'] = $user->email;
    $userData['picture'] = $user->picture;

     #var_dump($user);
     $_SESSION['user'] =$userData; 
     header('Location:userInfo.php');
>>>>>>> 144683f7e8657a761bc3322917553d57ce103627
    }else{
        header('Location:login_client.php');
        exit();
    }

?>