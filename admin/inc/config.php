<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('Asia/India');

// Host Name
$dbhost = 'sql309.infinityfree.com';

// Database Name
$dbname = 'if0_36947859_web';

// Database Username
$dbuser = 'if0_36947859';

// Database Password
$dbpass = 'pPcEgxMphMwRN ';

// Defining base url
define("BASE_URL", "localhost/ex/");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}