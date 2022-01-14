<?php
function GetAllRecipe()
{
    try {
        $pdo = new PDO('mysql:host=localhost; dbname=we_love_food', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * from recipes ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll();
        return $row;
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
