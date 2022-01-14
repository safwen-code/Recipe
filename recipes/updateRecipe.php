<?php
require_once "../backend/pdo.php";
if (
    isset($_POST['title']) && isset($_POST['recipe'])
    && isset($_POST['author']) && isset($_POST['recipe_id'])
) {
    $sql = "UPDATE recipes SET title = :title,
recipe = :recipe, author = :author
WHERE recipe_id = :recipe_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':title' => $_POST['title'],
        ':recipe' => $_POST['recipe'],
        ':author' => $_POST['author'],
        ':recipe_id' => $_POST['recipe_id']
    ));
    header('Location: Recipes.php');
    return;
}
$stmt = $pdo->prepare("SELECT * FROM recipes where recipe_id = :xyz");
$stmt->execute(array(":xyz" => $_GET['recipe_id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$title = htmlentities($row['title']);
$recipe = htmlentities($row['recipe']);
$author = htmlentities($row['author']);
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

        <h3 class="d-flex justify-content-center">Edit User</h3>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">titel:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="<?= $title ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"> recipe:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="recipe" value="<?= $recipe ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">author:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="author" value="<?= $author ?>">
                </div>
            </div>
            <input type="hidden" class="form-control" name="recipe_id" value="<?= $recipe_id ?>">
            <div class="col">
                <button type="submit" class="btn btn-primary mx-3">editeUser</button>
                <a href="Recipes.php">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>