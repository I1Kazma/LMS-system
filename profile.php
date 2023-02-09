<?php
require "db.php";
$data = $_POST;
$showError = False;
$user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));
$admin = R::findOne('admins', 'id = ?', array($_SESSION['admin']->id));
if ($user): {
        if (isset($data['set_avatar'])) {
            $avatar = $_FILES['avatar'];
            if (avatarSecurity($avatar))
                loadAvatar($avatar);
        }

        if (isset($data['addnumber'])) {
            $user->number = $data['number'];
            R::store($user);
        }

        if (isset($data['addcountry'])) {
            $user->country = $data['country'];
            R::store($user);
        }

        if (isset($data['addcity'])) {
            $user->city = $data['city'];
            R::store($user);
        }
    }
else:
endif;

if ($admin): {
        if (isset($data['set_avatar'])) {
            $avatar = $_FILES['avatar'];
            if (avatarSecurity($avatar))
                loadAvatarAdmin($avatar);
        }

        if (isset($data['addnumber'])) {
            $admin->number = $data['number'];
            R::store($admin);
        }

        if (isset($data['addcountry'])) {
            $admin->country = $data['country'];
            R::store($admin);
        }

        if (isset($data['addcity'])) {
            $admin->city = $data['city'];
            R::store($admin);
        }
    }
else:
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/left-menu.css">
    <link rel="stylesheet" href="fonts/Inter-Thin.otf">

    <style>
        input[type="text"]::placeholder {
            color:
                white;
        }

        input[type="tel"]::placeholder {
            color:
                white;
        }

        input[type="date"]::placeholder {
            color:
                white;
        }
    </style>
</head>



<body>

    <!--ПОЛЬЗОВАТЕЛЬ-->



    <main>
        <?php if ($user): ?>
        <header class="header">
            <div class="container">

                <div class="widget">

                    <div class="scale">
                        <p><a href="training_list.php"><img class="logo" src="img\png\logo_.png" alt="Logo"></a>
                    </div>
                    <div class="scale">
                        <p><a href="profile.php"><img class="foto" src="uploads/avatars/<?php echo $user->avatar; ?>"
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
                                <li class="widget_list"><a href="training.php"><img src="img\png\auto_stories.png"
                                            alt=""></a></li>
                            </p>
                        </div>
                    </ul>
                </div>
            </div>
        </header>

        <div class="container_nav">

            <div class="nav">
                <ul class="ul-nav">
                    <li class="menu-nav"><a class="btn" href="">Профиль</a></button></li>
                </ul>
            </div>
            <div class="logout">
                <li class="menu-nav">
                    <a class="btn_logout" href="logout.php">Выйти</a>
                </li>
            </div>
        </div>
        <h1 class="welcome">Добро пожаловать, пользователь
            <?php echo ($user)->firstname ?>!
        </h1>

        <div class="content_page_flex">
            <div class="content_page">
                <div class="container_profile">
                    <div>
                        <span class="content_text">Ваш Аватар</span>

                    </div>

                    <form action="profile.php" method="post" enctype="multipart/form-data" class="form_avatar">
                        <div class="avatar">
                            <img src="uploads/avatars/<?php echo $user->avatar; ?>" class="avatar"><br>
                            <input type="file" name="avatar" class="set_avatar">
                            <button type="submit" name="set_avatar" class="btn_avatar">Обновить</button>
                        </div>
                    </form>
                </div>
                <div class="profile_info">
                    <ul class="profile_content">
                        <li>
                            <p class="profile_header">ФИО</p>
                            <p class="profile_echo">
                                <?php echo $user->firstname; ?>
                            </p>
                        </li>

                        <li>
                            <p class="profile_header">Номер телефона</p>
                            <form action="/" method="post">
                                <input type="tel" name="number" class="addnumber" placeholder="" style="width: 400px;
    font-family: 'Inter-Thin', sans-serif;
    font-size: 20px;
    color:white;
    border:none;
    padding-left: 15px;
    border-bottom: 2px solid white;
    border-radius: 0px 0px 15px 15px;
    background-color: #5472A5;
    color:white;" value="<?php echo $user->number; ?>">
                                <button type="submit" name="addnumber">✓</button>
                            </form>
                        </li>

                        <li>
                            <p class="profile_header">E-Mail</p>
                            <p class="profile_echo">
                                <?php echo $user->email; ?>
                            </p>
                            </p>
                        </li>

                        <li>
                            <p class="profile_header">Cтрана</p>
                            <form action="/" method="post">
                                <input type="text" name="country" class="addcountry" placeholder="" style="width: 400px;
    font-family: 'Inter-Thin', sans-serif;
    font-size: 20px;
    color:white;
    border:none;
    padding-left: 15px;
    border-bottom: 2px solid white;
    border-radius: 0px 0px 15px 15px;
    background-color: #5472A5;
    color:white;
    " value="<?php echo $user->country; ?>">
                                <button type="submit" name="addcountry">✓</button>
                            </form>
                        </li>

                        <li>
                            <p class="profile_header">Город</p>
                            <form action="/" method="post">
                                <input type="text" name="city" class="addcity" placeholder="<?php echo $user->city; ?>"
                                    style="width: 400px;
    font-family: 'Inter-Thin', sans-serif;
    font-size: 20px;
    color:white;
    padding-left: 15px;
    border:none;
    border-bottom: 2px solid white;
    border-radius: 0px 0px 15px 15px;
    background-color: #5472A5;
    color:white;" value="<?php echo $user->city; ?>">
                                <button type=" submit" name="addcity">✓</button>
                            </form>
                        </li>
                </div>



                <!--АДМИНИСТРАТОР-->



                <?php elseif ($admin): ?>
                <header class="header">
                    <div class="container">
                        <div class="widget">
                            <div class="scale">
                                <p><a href="training_list.php"><img class="logo" src="img\png\logo_.png" alt="Logo"></a>
                            </div>
                            <div class="scale">
                                <p><a href="profile.php"><img class="foto"
                                            src="uploads/avatars/<?php echo $admin->avatar; ?>" class="photo"
                                            alt=" Foto"></a>
                            </div>
                            <ul class="widget-heading">
                                <div class="scale">
                                    <p>
                                        <li class="widget_list"><a href="message.php"><img src="img\png\comment.png"
                                                    alt=""></a>
                                        </li>
                                    </p>
                                </div>
                                <div class="scale">
                                    <p>
                                        <li class="widget_list"><a href="training.php"><img
                                                    src="img\png\auto_stories.png" alt=""></a></li>
                                    </p>
                                </div>
                            </ul>
                        </div>
                    </div>
                </header>

                <div class="container_nav">
                    <div class="nav">
                        <ul class="ul-nav">
                            <li class="menu-nav"><a class="btn" href="">Профиль</a></button></li>
                        </ul>
                    </div>
                    <div class="logout" style>
                        <li class="menu-nav">
                            <a class="btn_logout" href="logoutAdmin.php">Выйти</a>
                        </li>
                    </div>
                </div>



                <?php if ($admin): ?>
                <h1 class="welcome">Добро пожаловать, администратор
                    <?php echo ($admin)->firstname ?>!
                </h1>

                <div class="content_page_flex">
                    <div class="content_page">
                        <div class="container_profile">
                            <div>
                                <span class="content_text">Ваш Аватар</span>
                            </div>

                            <form action="/" method="post" enctype="multipart/form-data" class="form_avatar">
                                <div class="avatar">
                                    <img src="uploads/avatars/<?php echo $admin->avatar; ?>" class="avatar"><br>
                                    <input type="file" name="avatar" class="set_avatar">
                                    <button type="submit" name="set_avatar" class="btn_avatar">Обновить</button>
                                </div>
                            </form>
                        </div>
                        <div class="profile_info">
                            <ul class="profile_content">
                                <li сlass=" profile_li">
                                    <p class="profile_header">ФИО</p>
                                    <p class="profile_echo">

                                        <?php echo $admin->firstname; ?>
                                    </p>
                                </li>

                                <li>
                                    <p class="profile_header">Номер телефона</p>
                                    <form action="/" method="post">
                                        <input type="tel" name="number" class="addnumber" placeholder=""
                                            value="<?php echo $admin->number; ?>" style="width: 400px;
    font-family: 'Inter-Thin', sans-serif;
    font-size: 20px;
    color:white;
    border:none;
    padding-left: 15px;
    border-bottom: 2px solid white;
    border-radius: 0px 0px 15px 15px;
    background-color: #5472A5;
    color:white;">
                                        <button type="submit" name="addnumber">✓</button>
                                    </form>
                                </li>

                                <li>
                                    <p class="profile_header">E-Mail</p>
                                    <p class="profile_echo">
                                        <?php echo $admin->email; ?>
                                    </p>
                                    </p>
                                </li>

                                <li>
                                    <p class="profile_header">Cтрана</p>
                                    <form action="/" method="post">
                                        <input type="text" name="country" class="addcountry" placeholder="" style="width: 400px;
    font-family: 'Inter-Thin', sans-serif;
    font-size: 20px;
    color:white;
    border:none;
    padding-left: 15px;
    border-bottom: 2px solid white;
    border-radius: 0px 0px 15px 15px;
    background-color: #5472A5;
    color:white;
    " value="<?php echo $admin->country; ?>">
                                        <button type="submit" name="addcountry">✓</button>
                                    </form>
                                </li>

                                <li>
                                    <p class="profile_header">Город</p>
                                    <form action="/" method="post">
                                        <input type="text" name="city" class="addcity"
                                            placeholder="<?php echo $admin->city; ?>" style="width: 400px;
    font-family: 'Inter-Thin', sans-serif;
    font-size: 20px;
    color:white;
    padding-left: 15px;
    border:none;
    border-bottom: 2px solid white;
    border-radius: 0px 0px 15px 15px;
    background-color: #5472A5;
    color:white;" value="<?php echo $admin->city; ?>">
                                        <button type=" submit" name="addcity">✓</button>
                                    </form>
                                </li>
                        </div>

                        <?php else: ?>
                        <?php endif; ?>
                        <?php else:
            header('Location: /signin.php');
        endif; ?>

                    </div>
                </div>
            </div>
        </div>

        </div>
    </main>
</body>

</html>