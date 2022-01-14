<?php
// connection base de données
try {
    $pdo = new PDO('mysql:host=localhost; dbname=we_love_food', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $exception) {
    die('Erreur : ' . $exception->getMessage());
}
