<?php
$host = 'db';
$dbname = 'agence_db';
$user = 'root';
$pass = 'verysecurepassword';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
