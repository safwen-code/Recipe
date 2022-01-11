<?php
include_once('../backend/pdo.php');
$id = $_GET['id'];
if (isset($id)) {
    $sql = "SELECT * FROM recipes WHERE recipe_id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':id' => $id
    ));
    $recipe = $stmt->fetch(PDO::FETCH_ASSOC);
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
    <h1>recipe detail</h1>

    <h6><?php echo $recipe['title']; ?></h6>
    <p><?php echo $recipe['recipe']; ?></p>
    <div>
        <label>Author : </label>
        <p><?php echo $recipe['author'] ?></p>
    </div>
</body>

</html>