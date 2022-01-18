<?php
require_once('./model/RecipeManager.php');

function AllRecipes()
{
    $recipeManager = new \safwen\blog\Model\RecipeManager;
    $recipes = $recipeManager->GetAllRecipe();
    require('./view/displayRecipes.php');
}
function RecipesByID($id)
{
    $recipeManager = new \safwen\blog\Model\RecipeManager;
    $recipe = $recipeManager->GetRecipeById($id);
    require('./view/detailRecipe.php');
}
function DeleteById($idGet, $idPost)
{
    $recipeManager = new \safwen\blog\Model\RecipeManager;
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
    $recipeManager = new \safwen\blog\Model\RecipeManager;
    $row = $recipeManager->GetRecipeById($idGet);
    require_once('./view/updateRecipe.php');
    if (isset($idPost)) {
        $recipeManager->updateRecipe($idPost, $title, $recipe, $author);
    }
}

function AddRecipe($title, $recipe, $author)
{
    $recipeManager = new \safwen\blog\Model\RecipeManager;
    require_once('./view/add.php');
    $recipeManager->AddRecipe($title, $recipe, $author);
}
