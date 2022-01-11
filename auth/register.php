<?php
include_once('../backend/pdo.php');
if (
    isset($_POST['full_name']) && isset($_POST['email'])
    && isset($_POST['password'])
) {
    $sql = "INSERT INTO users (full_name, email, password)
         VALUES (:full_name, :email, :password)
         ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':full_name' => $_POST['full_name'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password']
    ]);
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
    <form method="post">
        fullName :<input type="text" value="" name="full_name" />
        email :<input type="text" value="" name="email" />
        password :<input type="text" value="" name="password" />
        <input type="submit" value="register" />

    </form>
</body>

</html>