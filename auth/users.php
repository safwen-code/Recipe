<?php
include_once('./variabels.php')
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
    <?php include_once('./login.php') ?>
    <?php foreach ($users as $user) : ?>
        <div>
            <h1>
                <a href="detailUser.php?user_id=<?= $user['user_id'] ?>">
                    fullName : <?= $user['full_name'] ?></a>
            </h1>
            <span>email :<?= $user['email'] ?> </span>
            <p>password :<?= $user['password'] ?> </p>
        </div>
    <?php endforeach; ?>
</body>

</html>