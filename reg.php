<?php
require "db.php";
$data = $_POST;
$showError = False;

if (isset($data['signup'])) {
    $errors = array();
    $showError = true;

    if (trim($data['firstname']) == '') {
        $errors[] = 'Укажите имя';
    }
    if (trim($data['email']) == '') {
        $errors[] = 'Укажите E-Mail';
    }
    if (trim($data['password']) == '') {
        $errors[] = 'Укажите пароль';
    }
    if (trim($data['password']) != trim($data['password_2'])) {
        $errors[] = 'Неверный пароль';
    }

    if (R::count('users', 'email = ?', array($data['email'])) > 0) {
        $errors[] = 'Такой пользователь уже зарегистрирован!';
    }

    if (empty($errors)) {
        $user = R::dispense('users');
        $user->firstname = $data['firstname'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        $user->avatar = 'noavatar.png';
        R::store($user);
    }

}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>LMSteam</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/auth.css">
    <link rel="stylesheet" href="css/mainpage.css">
</head>

<body>
    <header class="header_main">
        <div class="container_header">
            <!-- <h1 align="center">LMSteam</h1> -->
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
            <h1>Регистрация</h1>
            <form action="/reg.php" method="post">
                <div class="user-box">
                    <input type="text" name="firstname" required="">
                    <label>Ваше имя</label>
                </div>
                <div class="user-box">
                    <input type="email" name="email" required="">
                    <label>E-Mail</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" required="">
                    <label>Введите пароль</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password_2" required="">
                    <label>Подтвердите пароль</label>
                </div>
                <div class="button_box_auth">
                    <button type="submit" name="signup" class="btn_submit">
                        Регистрация
                    </button>
                    <button class="btn_submit"><a href="/signin.php">
                            Вход
                        </a></button>
                </div>
            </form>
            <p class="errors">
                <?php if ($showError) {
                    echo showError($errors);
                } ?>
            </p>
        </div>
        </div>
    </main>


</body>

</html>