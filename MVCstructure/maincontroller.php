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
        return;
    }
}
function UpdateByID($idGet, $idPost, $title, $recipe, $author)
{
    $recipe = GetRecipeByID($idGet);
    require_once('updateRecipe.php');
    if (isset($idPost) && isset($title) && isset($recipe) && isset($author)) {
        updateRecipe($idPost, $title, $recipe, $author);
    }
}
