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
    <?php include_once('../layout/navbar.php') ?>
    <div class="container">
        <h5 class="d-flex justify-content-center mt-3">add recipe</h5>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">titel</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">recipe</label>
                <input type="text" class="form-control" name="recipe">
            </div>
            <div class="mb-3">
                <label class="form-label">author</label>
                <input type="text" class="form-control" name="author">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
<?php $content = ob_get_clean() ?>
<?php require_once('template.php') ?>