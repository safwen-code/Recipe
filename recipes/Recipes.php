<?php
//connect to db 
include_once('../backend/pdo.php');
//create sql to get all recipe
$sql = "SELECT * FROM recipes";
//prepare the stmt
$stmt = $pdo->prepare($sql);
//execute & fetchAll
$stmt->execute();

$row = $stmt->fetchAll();
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
    <form>
        <?php foreach ($row as $recipe) : ?>
            <article>
                <h3><a href="./detailRecipe.php?id=<?php echo $recipe['recipe_id']; ?>"><?php echo $recipe['title']; ?></a></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <ul class="list-group list-group-horizontal">
                    <li><a href="updateRecipe.php?recipe_id=<?php echo $recipe['recipe_id']; ?>">Editer l'article</a></li>
                    <li><a href="deleteRecipe.php?recipe_id=<?php echo $recipe['recipe_id']; ?>">Supprimer l'article</a></li>
                </ul>
            </article>
        <?php endforeach; ?>
    </form>
</body>

</html>