<?php
require_once('maincontroller.php');
if (isset($_GET['action'])) {
    if ($_GET['action'] == "listRecipes") {
        AllRecipes();
    } else if ($_GET['action'] == "detailRecipe") {
        RecipesByID();
    }
} else {
    AllRecipes();
}
