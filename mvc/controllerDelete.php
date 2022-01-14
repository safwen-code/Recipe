<?php
require_once('model.php');
$recipe = GETRecipeById($_GET['recipe_id']);
if (isset($_POST['recipe_id'])) {
    deleteRecipe($_POST['recipe_id']);
    header('location: controller.php');
    return;
}
require_once('deleteRecipe.php');
