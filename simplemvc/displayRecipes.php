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
        <div class="row">
            <form methode="get" action="listRecipes">
                <?php foreach ($recipes as $recipe) : ?>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="./router.php?action=detailRecipe&amp;recipe_id=<?= $recipe['recipe_id'] ?>">
                                    <?php echo $recipe['title']; ?></a>
                            </p>
                            <p class="lead">
                                <?php echo $recipe['recipe']; ?>
                            </p>
                            <div class=" d-flex ">
                                <a href="./router.php?action=updateRecipe&amp;recipe_id=<?php echo $recipe['recipe_id']; ?>" class="btn btn-primary mx-3">Edite Recipe</a>
                                <a href="./router.php?action=deleteRecipe&amp;recipe_id=<?php echo $recipe['recipe_id']; ?>" class="ms-3 btn btn-primary">Delete Recipe</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </form>


        </div>
    </div>

</body>

</html>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>