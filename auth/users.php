<?php
include_once('../backend/pdo.php');
$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();
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
    <?php foreach ($users as $user) : ?>
        <div>
            <h1>fullName : <?= $user['full_name'] ?> </h1>
            <span>email :<?= $user['email'] ?> </span>
            <p>password :<?= $user['password'] ?> </p>
        </div>
    <?php endforeach; ?>
</body>

</html>