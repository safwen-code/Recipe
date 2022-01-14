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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include_once('../layout/navbar.php') ?>
    <div class="container mt-3">
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" " name=" password">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">fullName</label>
                <input type="text" class="form-control" name="full_name">
            </div>
            <button class="btn btn-primary  m-auto mt-3"> Register</button>
        </form>
    </div>

</body>

</html>