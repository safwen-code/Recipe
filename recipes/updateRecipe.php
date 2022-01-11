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
<p>Edit User</p>
<form method="post">
    <p>Name:
        <input type="text" name="title" value="<?= $title ?>">
    </p>
    <p>Email:
        <input type="text" name="recipe" value="<?= $recipe ?>">
    </p>
    <p>Password:
        <input type="text" name="author" value="<?= $author ?>">
    </p>
    <input type="hidden" name="recipe_id" value="<?= $recipe_id ?>">
    <p><input type="submit" value="Update" />
        <a href="index.php">Cancel</a>
    </p>
</form>