<?php
require_once __DIR__ . '/../vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

session_start();
ob_start();

define('BASE_URL', $_ENV['BASE_URL']);

define('DB_HOST',     $_ENV['DB_HOST']);
define('DB_NAME',     $_ENV['DB_NAME']);
define('DB_USER',     $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

date_default_timezone_set('Asia/Kolkata');

require_once __DIR__ . '/db.php';
