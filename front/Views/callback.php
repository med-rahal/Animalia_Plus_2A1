<?php
    require_once('settings.php');
    include "../Controller/ClientC.php";
    include_once '../Model/Client.php';

 
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
    }else{
        header('Location:login_client.php');
        exit();
    }

?>