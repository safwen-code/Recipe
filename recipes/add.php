<?php
//connect to db
include_once('../backend/pdo.php');
if (
    isset($_POST['title']) && isset($_POST['recipe'])
    && isset($_POST['author'])
) {
    // create sql to add recipe
    $sql = "INSERT INTO recipes (title, recipe, author)
            VALUES (:title, :recipe, :author)
            ";
    //prepare sql statment $stmt
    $stmt = $pdo->prepare($sql);
    //execute array stmt
    $stmt->execute(array(
        ':title' => $_POST['title'],
        ':recipe' => $_POST['recipe'],
        ':author' => $_POST['author'],
    ));
    //redirect to home
    header('Location: Recipes.php');
    return;
}





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
    add recipe
    <form method="post">
        title : <input type="text" name="title" value="" />
        recipe : <input type="text" name="recipe" value="" />
        author : <input type="text" name="author" value="" />
        <input type="submit" value="add recipe" />
    </form>
</body>

</html>