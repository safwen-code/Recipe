<?php
require_once('model.php');
function AllRecipes()
{
    $recipes = GetAllRecipe();
    require('displayRecipes.php');
}
function RecipesByID($id)
{
    $recipe = GETRecipeById($id);
    require('detailRecipe.php');
}
function DeleteById($idGet, $idPost)
{
    $recipe = GETRecipeById($idGet);
    require_once('deleteRecipe.php');
    if (isset($idPost)) {
        deleteRecipe($idPost);
        header('Location: index.php');
        exit();
    }
}
function UpdateByID($idGet, $idPost, $title, $recipe, $author)
{
    $row = GETRecipeById($idGet);
    require_once('updateRecipe.php');
    if (isset($idPost)) {
        updateRecipe($idPost, $title, $recipe, $author);
        header('Location: index.php');
        exit();
    }
}

function AddRecipe($title, $recipe, $author)
{
    require_once('add.php');
    echo $title;
    echo $recipe;
    echo $author;
}
