<?php
require_once('maincontroller.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == "listRecipes") {
        AllRecipes();
    } else if ($_GET['action'] == "detailRecipe") {
        RecipesByID($_GET['recipe_id']);
    } elseif ($_GET['action'] == "deleteRecipe") {
        $idGet = $_GET['recipe_id'];
        $idPost = $_POST['recipe_id'];
        deletebyId($idGet, $idPost);
    } elseif ($_GET['action'] == "updateRecipe") {
        $idGet = $_GET['recipe_id'];
        UpdateByID($idGet, $_POST['recipe_id'], $_POST['title'], $_POST['recipe'], $_POST['author']);
    }
} else {
    AllRecipes();
}
