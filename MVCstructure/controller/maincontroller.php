<?php
require_once('./model/model.php');
function AllRecipes()
{
    $recipes = GetAllRecipe();
    require('./view/displayRecipes.php');
}
function RecipesByID($id)
{
    $recipe = GETRecipeById($id);
    require('./view/detailRecipe.php');
}
function DeleteById($idGet, $idPost)
{
    $recipe = GETRecipeById($idGet);
    require_once('./view/deleteRecipe.php');
    if (isset($idPost)) {
        deleteRecipe($idPost);
        header('Location: index.php');
        exit();
    }
}
function UpdateByID($idGet, $idPost, $title, $recipe, $author)
{
    $row = GETRecipeById($idGet);
    require_once('./view/updateRecipe.php');
    if (isset($idPost)) {
        updateRecipe($idPost, $title, $recipe, $author);
    }
}

function AddRecipe($title, $recipe, $author)
{
    require_once('./view/add.php');
    postRecipe($title, $recipe, $author);
}
