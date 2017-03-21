<?php
require_once 'header.php';

$authUrl = $authHelper->getAuthUrl();
echo "<a href='" . $authUrl . "'>Log in with Dropbox</a>";
