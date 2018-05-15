<?php

session_start();
require_once __DIR__ . '/src/Facebook/autoload.php';


echo '<h3>Getting Access Token information</h3>';
if (isset($_SESSION['fb_access_token'])) {
        echo '$_SESSION[fb_access_token] ==>' .$_SESSION['fb_access_token'];
        
    $fb = new Facebook\Facebook(['app_id' => '1862426254056140','app_secret' => '5b115117d5f22ee40579fd5ab34c9c93','default_graph_version' => 'v2.4',]);

    try {  // Returns a `Facebook\FacebookResponse` object
      $response = $fb->get('/me?fields=id,name', $_SESSION['fb_access_token']);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }

    $user = $response->getGraphUser();
    ?><br><?php
    echo 'Name: ' . $user['name'];
    ?><br><?php    
}  else {
    
    echo "Dont know about session";    
}
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 



?><br><?php
if (isset($_SESSION['fb_access_token'])) {
        echo '$_SESSION[fb_access_token] ==>' .$_SESSION['fb_access_token'];
        
    $fb = new Facebook\Facebook(['app_id' => '1862426254056140','app_secret' => '5b115117d5f22ee40579fd5ab34c9c93','default_graph_version' => 'v2.4',]);

    try {  // Returns a `Facebook\FacebookResponse` object
      $response = $fb->get('/me?fields=id,name', $_SESSION['fb_access_token']);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }

    $user = $response->getGraphUser();
    ?><br><?php
    echo 'Name: ' . $user['name'];
    ?><br><?php    
}  else {
    echo "Dont know about session";    
}



?>
