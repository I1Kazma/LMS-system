<?php
require "db.php";
$data = $_POST;
$showError = False;

if (isset($data['signin'])) {

    $errors = array();
    $showError = true;

    if (trim($data['email']) == '') {
        $errors[] = 'Укажите E-Mail';
    }

    if (trim($data['password']) == '') {
        $errors[] = 'Укажите пароль';
    }
}

$user = R::findOne('users', 'email = ?', array($data['email']));
if ($user) {
    if (password_verify($data['password'], $user->password)) {
        $_SESSION['user'] = $user;
        header('Location: /profile.php');
    } else {
        $errors[] = 'Неверный пароль или E-Mail';
    }
} else {
    $errors[] = 'Пользователь не найден';
}

$admin = R::findOne('admins', 'email = ?', array($data['email']));
if ($admin) {
    if (password_verify($data['password'], $admin->password)) {
        $_SESSION['admin'] = $admin;
        header('Location: /profile.php');
    } else {
        $errors[] = 'Неверный пароль или E-Mail';
    }
} else {
    $errors[] = 'Пользователь не найден';
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="css\auth.css">
    <link rel="stylesheet" href="css\mainpage.css">
    <link rel="stylesheet" href="fonts\Inter-Thin.otf">
</head>

<body>
    <div id="wrapper">
        <header class="header_main">
            <div class="container_header">
                <div class="header_warp">
                    <div class="scale" style="background-color:#a7c1ee; padding:10px;">
                        <p>
                            <a href="index.html">
                                <img class="header_img" src="img\png\logo_.png" alt="Logo">
                            </a>
                        </p>
                    </div>
                    <div class="header_box">
                        <a href="index.html"><button class="btn_header">Главная</button></a>
                        <h4 class="phone" target="_blank">&#9742 8-800-000-00-00</h4>
                    </div>
                    <div class="auth_box">

                    </div>
                </div>
        </header>

        <main>
            <div class="login-box">
                <h1>Вход</h1>
                <form action="/signin.php" method="post">
                    <div class="user-box">
                        <input type="email" name="email" required="">
                        <label>E-Mail</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="password" required="">
                        <label>Пароль</label>
                    </div>
                    <div class="button_box_auth_err">
                        <div class="button_box_auth">
                            <button class="btn_submit" type="submit" name="signin">
                                Войти</button>
                            <button class="btn_submit"><a href="reg.php">Регистрация</a></button>
                        </div>
                        <p class="errors" style="margin:45px">
                            <?php if ($showError) {
                                echo showError($errors);
                            } ?>
                        </p>
                    </div>
                </form>
            </div>
        </main>

</body>

</html>