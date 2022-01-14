<?php
function connectdb()
{
    try {
        $pdo = new PDO('mysql:host=localhost; dbname=we_love_food', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function GetAllRecipe()
{
    try {
        $pdo = connectdb();
        $sql = "SELECT * from recipes ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll();
        return $row;
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}

function GETRecipeById($id)
{
    try {
        $pdo = connectdb();
        $sql = "SELECT * FROM recipes WHERE recipe_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':id' => $id,
        ));
        $recipe = $stmt->fetch(PDO::FETCH_ASSOC);
        return $recipe;
    } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
