<?php
require_once('model.php');

if (isset($_GET['recipe_id'])) {
    $recipe = GETRecipeById($_GET['recipe_id']);
} else {
    echo "user_id is not defu=ine";
}

require_once('detailRecipe.php');
