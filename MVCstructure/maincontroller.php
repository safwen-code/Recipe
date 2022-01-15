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
function DeleteById()
{
}
function UpdateByID()
{
}
