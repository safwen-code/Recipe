<?php
require_once('model.php');
$recipe = GETRecipeById($_GET['recipe_id']);

if (isset($_POST['title']) && isset($_POST['recipe']) && isset($_POST['author']) && isset($_POST['recipe_id'])) {
    $title = $_POST['title'];
    $recipe = $_POST['recipe'];
    $author = $_POST['author'];
    $id = $_POST['recipe_id'];
    updateRecipe($id, $title, $recipe, $author);
    header('Location: controller.php');
    return;
}
require_once('updateRecipe.php');
