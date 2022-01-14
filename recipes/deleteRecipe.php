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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <?php include_once('../layout/navbar.php') ?>

    <div class="container mt-3">
        <h1 class="text">delete Recipe</h1>
        <form method="post">
            <h6>le recipe est nommée :: <?= $title ?></h6>
            <input type="text" name="recipe_id" value="<?= $recipe_id ?>" />
            <button type="submit" class="btn btn-success">delete</button>
        </form>
    </div>
</body>

</html>