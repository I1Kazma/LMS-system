<?php
require "db.php";
$admin = R::findOne('admins', 'id = ?', array($_SESSION['admin']->id));
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Каспийская гимназия</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/left-menu.css">
    <link rel="stylesheet" href="css/addcontent.css">
    <link rel="stylesheet" href="fonts/Inter-V.otf">
</head>

<body>
    <?php if ($admin): ?>
    <header class="header">
        <div class="container">
            <div class="widget">
                <div class="scale">
                    <p><a href="training_list.php"><img class="logo" src="img\png\logo_.png" alt="Logo"></a>
                </div>
                <div class="scale">
                    <p><a href="profile.php"><img class="foto" src="uploads/avatars/<?php echo $admin->avatar; ?>"
                                class="photo" alt=" Foto"></a>
                </div>
                <ul class="widget-heading">
                    <div class="scale">
                        <p>
                            <li class="widget_list"><a href="message.php"><img src="img\png\comment.png" alt=""></a>
                            </li>
                        </p>
                    </div>

                    <div class="scale">
                        <p>
                            <li class="widget_list"><a href="training_list.php"><img src="img\png\auto_stories.png"
                                        alt=""></a></li>
                        </p>
                    </div>
                </ul>
            </div>
        </div>
    </header>

    <main class="main">

        <div class="container_nav">
            <div class="nav">
                <ul class="ul-nav">
                    <li class="menu-nav"><a class="btn" href="training_list.php">Список тренингов</a></button></li>
                    <p class="strel_nav"><img src="img/svg/arrow_forward_ios.svg" alt=""></p>
                    <li class="menu-nav"><a class="btn" href="training.php">Web-разработчик</a></button></li>
                    <p class="strel_nav"><img src="img/svg/arrow_forward_ios.svg" alt=""></p>
                    <li class="menu-nav"><a class="btn" href="">PLC</a></button></li>
                </ul>
            </div>
            <div class="logout">
                <li class="menu-nav">
                    <a class="btn_logout" href="logoutAdmin.php">Выйти</a>
                </li>
            </div>
        </div>
        <container class="add_page">
            <h1 class="Lesson_header">Добавление урока</h1>
            <div style="display:flex; align-items: center; gap:15px;">
                <h3 class="Lesson_header" style="color:black">Введите название урока:
                </h3>
                <textarea cols="70" rows="3" style="font-size:20px; margin-top:20px;"> </textarea>
            </div>
        </container>
        <?php else: endif ?>