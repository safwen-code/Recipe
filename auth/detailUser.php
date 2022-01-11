<?php
include_once('../backend/pdo.php');
if (isset($_GET['user_id'])) {
    $sql = "SELECT * FROM users WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':user_id' => $_GET['user_id']
    ));
    $user = $stmt->fetch();
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
    <form>
        <h1>Detail User</h1>
        <span>Name : <?php echo $user['full_name'] ?></span>
        <span>Email :<?= $user['email'] ?></span>
        <sapn>password :<?= $user['password'] ?></sapn>
        <button type="submit"><a href="">update user</a></button>
        <button type="submit"><a href="">delete user</a></button>
    </form>
</body>

</html>