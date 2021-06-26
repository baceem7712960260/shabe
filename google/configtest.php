<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('753573260951-570m122gv02gpl1c4tqfue7pibb54k2j.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('EBM_6xrZ5fgsKuYA8zdH-PZC');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://shabee.ga/google/test.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 
