<?php
$dsn = 'mysql:dbname=cldl;port=8889;host=127.0.0.1';
$dbUser = 'root';
$dbPassword = 'root';

try {
    $connection = new PDO($dsn, $dbUser, $dbPassword, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    exit('Connexion échouée : ' . $e->getMessage());
}
