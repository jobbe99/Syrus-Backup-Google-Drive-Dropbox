<?php
require_once 'header.php'

$code = 'code-presented-directly-to-the-user';

//Fetch the AccessToken
$accessToken = $authHelper->getAccessToken($code);

echo $accessToken->getToken();
