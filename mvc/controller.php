<?php
require_once('model.php');
$recipes = GetAllRecipe();
print_r($recipes);
require_once('displayRecipes.php');
