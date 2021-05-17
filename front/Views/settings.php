<?php    
    require_once('vendor/autoload.php');
    session_start();
    $client =new Google_Client(); 
    $client->setClientID("896074676304-ge7likbcvcq96hqhnig8dtvnkijmcj0o.apps.googleusercontent.com");
    $client->setClientSecret("wZsoWD7G5h5cQ0BbcDbvJaOs");
    $client->setApplicationName("Weblesson Demo");
    $client->setRedirectUri('http://localhost/integration/Animalia_Plus_2A1/front/Views/callback.php');
    $client->addScope("https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email");
    $login_url =$client->createAuthUrl();

?>