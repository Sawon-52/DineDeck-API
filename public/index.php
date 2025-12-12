<?php
require __DIR__ .'/../vendor/autoload.php';

use Dotenv\Dotenv;

// Here Findout .env file and load env variable 
$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

$config = require __DIR__ .'/../Config/config.php';
echo "<pre>";
print_r( $config['app']['name']);




