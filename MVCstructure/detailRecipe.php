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
    <div class="container mt-3">
        <h1>recipe detail</h1>

        <form methode="get" action="detailRecipe">
            <h6><?php echo $recipe['title']; ?></h6>
            <p><?php echo $recipe['recipe']; ?></p>
            <div>
                <label>Author : </label>
                <p><?php echo $recipe['author'] ?></p>
            </div>
        </form>


    </div>

</body>

</html>
<?php $content = ob_get_clean(); ?>
<?php require_once('template.php') ?>