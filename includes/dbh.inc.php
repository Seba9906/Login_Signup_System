<?php

$env = include __DIR__ . '/../config/.env.php';



try {
    $dsn = "mysql:host=" . $env["DB_HOST"] . ";dbname=" . $env["DB_NAME"];
    $pdo = new PDO($dsn, $env["DB_USERNAME"],$env['DB_PASSWORD']);

    $pdo ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}