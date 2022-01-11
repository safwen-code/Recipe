<?php
// connect to db 
include_once('../backend/pdo.php');
//check if $post of click btn existe and get[''userid]
if (isset($_POST['delete']) && isset($_POST['recipe_id'])) {
    //create slq to delete this recete
    $sql = "DELETE FROM recipes WHERE recipe_id = :zip";
    //prepare stmt 
    $stmt = $pdo->prepare($sql);
    //execute stmt
    $stmt->execute(array(
        ":zip" => $_POST['recipe_id']
    ));
    //redirect to home
    header('Location: Recipes.php');
    return;
}


//get recipe by id
$stmt = $pdo->prepare("SELECT title, recipe_id FROM recipes WHERE recipe_id = :xyz");
$stmt->execute(array(
    ':xyz' => $_GET['recipe_id']
));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$title = $row['title'];
$recipe_id = $row['recipe_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    delete Recipe
    <form method="post">
        <h1>le recipe est nommée :: <?= $title ?></h1>
        <input type="text" name="recipe_id" value="<?= $recipe_id ?>" />
        <input type="submit" value="Delete" name="delete" />

    </form>
</body>

</html>