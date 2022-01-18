<?php
require_once('../model/RecipeManager.php');

function AllRecipes()
{
    $recipeManager = new RecipeManager();
    $recipes = $recipeManager->GetAllRecipe();
    require('./view/displayRecipes.php');
}
function RecipesByID($id)
{
    $recipeManager = new RecipeManager();
    $recipe = $recipeManager->GetRecipeById($id);
    require('./view/detailRecipe.php');
}
function DeleteById($idGet, $idPost)
{
    $recipeManager = new RecipeManager();
    $recipe = $recipeManager->GetRecipeById($idGet);
    require_once('./view/deleteRecipe.php');
    if (isset($idPost)) {
        $recipeManager->DeleteRecipe($idPost);
        header('Location: index.php');
        exit();
    }
}
function UpdateByID($idGet, $idPost, $title, $recipe, $author)
{
    $recipeManager = new RecipeManager();
    $row = $recipeManager->GetRecipeById($idGet);
    require_once('./view/updateRecipe.php');
    if (isset($idPost)) {
        $recipeManager->updateRecipe($idPost, $title, $recipe, $author);
    }
}

function AddRecipe($title, $recipe, $author)
{
    $recipeManager = new RecipeManager();
    require_once('./view/add.php');
    $recipeManager->AddRecipe($title, $recipe, $author);
}
