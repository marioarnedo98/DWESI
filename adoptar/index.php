<?php
// Start Session
session_start();

// Composer autoloader
require_once 'vendor/autoload.php';

require_once 'config/config.php';
require_once 'config/database.php';

$app = new App;
