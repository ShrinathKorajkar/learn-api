<?php
// serverkey = "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"
// clientkey = "1037380840579-i8ge4nst6thl82vsda1feg4deigc4h0t.apps.googleusercontent.com"

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1037380840579-i8ge4nst6thl82vsda1feg4deigc4h0t.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Api/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');
