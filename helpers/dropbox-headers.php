<?php
session_start();

require_once 'vendor/autoload.php'

use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;

$app = new DropboxApp($this->options['dropbox_key'], $this->options['dropbox_secret']);

$dropbox = new Dropbox($app);

$authHelper = $dropbox->getAuthHelper();
