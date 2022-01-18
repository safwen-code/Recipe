<?php
require_once('./controller/maincontroller.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == "listRecipes") {
        AllRecipes();
    } else if ($_GET['action'] == "detailRecipe") {
        if (isset($_GET['recipe_id']) && $_GET['recipe_id'] > 0) {
            RecipesByID($_GET['recipe_id']);
        } else {
            throw new Exception('recipe_id is not defined');
        }
    } elseif ($_GET['action'] == "deleteRecipe") {
        $idGet = $_GET['recipe_id'];
        $idPost = $_POST['recipe_id'];
        deletebyId($idGet, $idPost);
    } elseif ($_GET['action'] == "updateRecipe") {
        $idGet = $_GET['recipe_id'];
        $idPost = $_POST['recipe_id'];
        $title = $_POST['title'];
        $recipe = $_POST['recipe'];
        $author = $_POST['author'];
        UpdateByID($idGet, $idPost, $title, $recipe, $author);
        header('Location: index.php');
    } elseif ($_GET['action'] = "post") {
        AddRecipe($_POST['title'], $_POST['recipe'], $_POST['author']);
    }
} else {
    AllRecipes();
}
