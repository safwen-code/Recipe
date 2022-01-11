<?php
include_once('../backend/pdo.php');

//get user by id
if (isset($_GET['user_id'])) {
    $sql = "SELECT full_name, email, user_id FROM users WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':user_id' => $_GET['user_id']
    ));
    $user = $stmt->fetch();
}

//delete user by id
if (isset($_POST['user_id'])) {
    $sqlDelete = "DELETE from users WHERE user_id = :xyz";
    $stmtDelete = $pdo->prepare($sqlDelete);
    $stmtDelete->execute(array(
        ':xyz' => $_POST['user_id']
    ));
    //rederect to home
    header('Location: users.php');
    return;
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
    delete user
    <form method="POST">
        <h1>name : <?= $user['full_name'] ?></h1></br>
        <h2>email : <?= $user['email'] ?></h2></br>
        <input type="text" name="user_id" value="<?php echo htmlentities($user['user_id'])  ?>" />
        <button type="submit" name="delete" value="delete">delete</button>
    </form>

</body>

</html>