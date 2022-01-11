<?php
include_once('./variabels.php');
if (isset($_POST['email']) && isset($_POST['password'])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ) {
            $loggedUser = [
                'email' => $user['email']
            ];
            //setCookies
            setcookie(
                'LOGGED_USER',
                $loggedUser['email'],
                [
                    'expires' => time() + 365 * 24 * 3600,
                    'secure' => true,
                    'httponly' => true
                ]
            );
            $_SESSION['LOGGED_USER'] = $loggedUser['email'];
        } else {
            $errorMessage = sprintf(
                'les informations envoyée ne permettent de vs identifier : (%s%s)',
                $_POST['email'],
                $_POST['password']
            );
        }
    }
}

//si le cookies et la session est present
if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGED_USER']
    ];
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
    <?php if (!isset($loggedUser)) : ?>
        <?php if (isset($errorMessage)) : ?>
            <?= $errorMessage ?>
        <?php endif; ?>
        <form method="post">
            email :<input type="text" value="" name="email" />
            password :<input type="text" value="" name="password" />
            <input type="submit" value="login" />

        </form>
    <?php else : ?>
        <div>
            bonjour <?= $loggedUser['email'] ?>
        </div>
    <?php endif; ?>
</body>

</html>