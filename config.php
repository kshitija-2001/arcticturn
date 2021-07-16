<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('973553541904-aegoudqj3kioni3fv1nh646e90bokhj7.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('40NWwkuYObuJhVHL-yJJvaVn');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://localhost/arcticturn/home.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>  