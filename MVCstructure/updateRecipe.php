<?php ob_start(); ?>
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
    <?php require_once('../layout/navbar.php') ?>
    <div class="container mt-3">

        <h3 class="d-flex justify-content-center">Edit User</h3>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">titel:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="<?= $recipe['title'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"> recipe:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="recipe" value="<?= $recipe['recipe'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">author:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="author" value="<?= $recipe['author'] ?>">
                </div>
            </div>
            <input type="hidden" class="form-control" name="recipe_id" value="<?= $recipe['recipe_id'] ?>">
            <div class="col">
                <button type="submit" class="btn btn-primary mx-3">editeUser</button>
                <a href="index.php">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>