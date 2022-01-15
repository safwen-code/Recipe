<?php
require_once('model.php');
function AllRecipes()
{
    $recipes = GetAllRecipe();
    require('displayRecipes.php');
}
function RecipesByID()
{
    echo "fuck you";
}
function DeleteById()
{
}
function UpdateByID()
{
}
