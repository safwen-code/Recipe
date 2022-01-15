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
            <h6>le recipe est nommée :: <?= $recipe['title'] ?></h6>
            <input type="text" name="recipe_id" value="<?= $recipe['recipe_id'] ?>" />
            <button type="submit" class="btn btn-success" name="delete">delete</button>
        </form>
    </div>
</body>

</html>