<?php

return [
    "app" => [
        "name" => $_ENV['APP_NAME'],
        "environment" => $_ENV['APP_ENV'],
    ],
    "database" => [
        "host" => $_ENV['DB_HOST'] ?? 'localhost',
        "database" => $_ENV['DB_NAME'] ?? '',
        "username" => $_ENV['DB_USER'] ?? 'root',
        "password" => $_ENV['DB_PASS'] ?? '', 
    ]
    ];