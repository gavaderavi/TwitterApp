<?php
if(!session_id()){
    session_start();
}

//Include Twitter client library 
include_once 'src/twitteroauth.php';

/*
 * Configuration and setup Twitter API
 */
$consumerKey    = 'Enter consumer Key ';
$consumerSecret = 'Enter consumer Secret';
$redirectURL    = 'http://localhost/Twitter App/';

?>