<?php
require_once('model.php');

$recipe = GETRecipeById($_GET['recipe_id']);
print_r($recipe);

require_once('detailRecipe.php');
