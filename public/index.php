<?php
require __DIR__ .'/../vendor/autoload.php';
use Dotenv\Dotenv;
use core\Router\Router;
// Here Findout .env file and load env variable 
$dotenv = Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

// Init router
$router = new Router();

// Load routes
require __DIR__ . '/../routes/api.php';

// Dispatch request
$router->dispatch();





