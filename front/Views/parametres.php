
<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '1874861539356551',
  'app_secret'     => '688c9cab55b8a4745ac952c25d65ba26',
  'default_graph_version'  => 'v2.10'
]);



?>