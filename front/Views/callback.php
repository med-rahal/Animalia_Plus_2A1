<?php
    require_once('settings.php');
 
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
    
    echo "<pre>";
    $userData['family_name'] = $user->family_name; 
    $userData['given_name'] = $user->given_name; 
    $userData['email'] = $user->email;
    $userData['picture'] = $user->picture;

     #var_dump($user);
     $_SESSION['user'] =$userData; 
     header('Location:userInfo.php');
    }else{
        header('Location:login_client.php');
        exit();
    }

?>