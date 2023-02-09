<?php
require "db.php";
$user = R::findOne('users', 'id = ?', array($_SESSION['user']->id));
$admin = R::findOne('admins', 'id = ?', array($_SESSION['admin']->id));
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Тренинги</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/left-menu.css">
    <link rel="stylesheet" href="fonts/Inter-Thin.otf">
</head>

<style>
    a {
        text-decoration: none;
        color: white
    }
</style>

<body>
    <div id="wrapper">
        <?php if ($user): ?>
        <header class="header">
            <div class="container">
                <div class="widget">
                    <div class="scale">
                        <p><a href="training_list.php"><img class="logo" src="img\png\logo_.png" alt="Logo"></a>
                    </div>
                    <div class="scale">
                        <p><a href="profile.php"><img class="foto" src="uploads/avatars/<?php echo $user->avatar; ?>"
                                    class="photo" alt="Foto"></a>
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


        <main>
            <div class="container_nav">
                <div class="nav">
                    <ul class="ul-nav">
                        <li class="menu-nav"><a class="btn" href="training_list.php">Список тренингов</a></button></li>
                        <p class="strel_nav"><img src="img/svg/arrow_forward_ios.svg" alt=""></p>
                        <li class="menu-nav"><a class="btn" href="">Web-разработчик</a></button></li>
                    </ul>
                </div>
                <div class="logout">
                    <li class="menu-nav">
                        <a class="btn_logout" href="logoutAdmin.php">Выйти</a>
                    </li>
                </div>
            </div>


            <div class=main-page-block>
                <div class="container_training">
                    <h1 class="Lesson_header">
                        Доступные уроки
                    </h1>

                    <ul class="lesson_list">
                        <li class="lesson_link">
                            <a href="#" style="text-decoration:none"><a href="#" style="text-decoration:none">
                                    <div class="lesson__info">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="lesson__logo"><img class="img_lesson__logo"
                                                            src="img\png\slideshow.png" alt="">
                                                    </td>
                                                    <td class=" lesson___icon">
                                                        <a href="lesson1.php"
                                                            style="text-decoration:none; color:white"><img
                                                                class="img_lesson__icon" src="img\png\plc.png" alt=""
                                                                style="width:150px; height:75px;">
                                                        </a>
                                                    </td>
                                                    <td class="lesson___text">
                                                        <a href="lesson1.php" style="text-decoration:none; color:white">
                                                            <h3 class="lesson_header"> PLС</h3>
                                                            <p>
                                                                Что такое PLC? <br> последовательность этапов, через
                                                                которые проходят проекты от инициации до завершения
                                                                независимо от их специфики.</p>
                                                        </a>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </a></a>
                        </li>

                        <li class="lesson_link">
                            <a href="#" style="text-decoration:none"><a href="#" style="text-decoration:none">
                                    <div class="lesson__info">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="lesson__logo"><img class="img_lesson__logo"
                                                            src="img\png\slideshow.png" alt="">
                                                    </td>
                                                    <td class=" lesson___icon">
                                                        <a href="lesson1.php" style="text-decoration:none"><img
                                                                class="img_lesson__icon" src="img\jpeg\cms.jpg" alt=""
                                                                style="width:150px; height:75px;">
                                                        </a>
                                                    </td>
                                                    <td class="lesson___text">
                                                        <a href="lesson2.php" style="text-decoration:none; color:white">
                                                            <h3 class="lesson_header"> Сиcтемы управления
                                                                контентом (CMS)</h3>
                                                            <p>
                                                                Что такое CMS? Популярные CMS.<br> WordPress:
                                                                знакомство,
                                                                установка CMS и администрирование.</p>
                                                        </a>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </a></a>
                        </li>

                        <li class="lesson_link">
                            <a href="#" style="text-decoration:none"><a href="#" style="text-decoration:none">
                                    <div class="lesson__info">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="lesson__logo"><img class="img_lesson__logo"
                                                            src="img\png\slideshow.png" alt="">
                                                    </td>
                                                    <td class=" lesson___icon">
                                                        <a href="lesson1.php" style="text-decoration:none"><img
                                                                class="img_lesson__icon" src="img\png\wordpress.png"
                                                                alt="" style="width:150px; height:75px;">
                                                        </a>
                                                    </td>
                                                    <td class="lesson___text">
                                                        <a href="lesson3.php" style="text-decoration:none; color:white">
                                                            <h3 class="lesson_header"> WordPress</h3>
                                                            <p>
                                                                Что такое WordPress?<br> Особенности распространения CMS
                                                            </p>
                                                        </a>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </a></a>
                        </li>

                    </ul>
                    <h1 class="Lesson_header">
                        Дополнительный материал
                    </h1>
                    <ul class="lesson_list">
                        <li class="lesson_link">
                            <a href="#">
                                <div class="lesson__info">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="lesson__logo"><img class="img_lesson__logo"
                                                        src="img\png\description.png" alt="">
                                                </td>
                                                <td class=" lesson___icon">
                                                    <a href="lesson1.php"><img class="img_lesson__icon"
                                                            src="img\jpeg\cms.jpg" alt=""
                                                            style="width:150px; height:75px;"></a>
                                                </td>
                                                <td class="lesson___text">
                                                    <a href="lesson1.php" style="text-decoration:none; color:white">
                                                        <h3 class="lesson_header"> Сиcтемы управления
                                                            контентом (CMS)</h3>
                                                        <p>Информационные ресурсы:<br>

                                                            <a href="https://ru.wordpress.org/support/" target="_blank"
                                                                style="text-decoration:none; color:white">
                                                                WordPress</a><br>
                                                            <a href="https://www.joomla.org/" target="_blank"
                                                                style="text-decoration:none; color:white">Joomla!
                                                            </a><br>
                                                            <a href="https://www.drupal.org/" target="_blank"
                                                                style="text-decoration:none; color:white">Drupal</a>
                                                        </p>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <?php elseif ($admin): ?>
            <header class="header">
                <div class="container">
                    <div class="widget">
                        <div class="scale">
                            <p><img class="logo" src="img\png\logo_.png" alt="Logo">
                        </div>
                        <div class="scale">
                            <p><a href="profile.php"><img class="foto"
                                        src="uploads/avatars/<?php echo $admin->avatar; ?>" class="photo"
                                        alt="Foto"></a>
                        </div>
                        <ul class="widget-heading">
                            <div class="scale">
                                <p>
                                    <li class="widget_list"><a href="message.php"><img src="img\png\comment.png"
                                                alt=""></a></li>
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


            <main>
                <div class="container_nav">
                    <div class="nav">
                        <ul class="ul-nav">
                            <li class="menu-nav"><a class="btn" href="training_list.php">Список тренингов</a></button>
                            </li>
                            <p class="strel_nav"><img src="img/svg/arrow_forward_ios.svg" alt=""></p>
                            <li class="menu-nav"><a class="btn" href="">Web-разработчик</a></button></li>
                        </ul>
                    </div>
                    <div class="logout" style=" width: 250px;
    display: flex;
    gap: 15px;">
                        <li class="menu-nav">
                            <a href="addlesson.php" class="change">Добавить урок</a>
                        </li>
                        <li class="menu-nav">
                            <a class="btn_logout" href="logoutAdmin.php">Выйти</a>
                        </li>
                    </div>
                </div>


                <div class=main-page-block>
                    <div class="container_training">

                        <h1 class="Lesson_header">
                            Доступные уроки
                        </h1>

                        <ul class="lesson_list">
                            <li class="lesson_link">
                                <a href="#" style="text-decoration:none"><a href="#" style="text-decoration:none">
                                        <div class="lesson__info">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="lesson__logo"><img class="img_lesson__logo"
                                                                src="img\png\slideshow.png" alt="">
                                                        </td>
                                                        <td class=" lesson___icon">
                                                            <a href="lesson1.php"
                                                                style="text-decoration:none; color:white"><img
                                                                    class="img_lesson__icon" src="img\png\plc.png"
                                                                    alt="" style="width:150px; height:75px;">
                                                            </a>
                                                        </td>
                                                        <td class="lesson___text">
                                                            <a href="lesson1.php"
                                                                style="text-decoration:none; color:white">
                                                                <h3 class="lesson_header"> PLС</h3>
                                                                <p>
                                                                    Что такое PLC? <br> последовательность этапов, через
                                                                    которые проходят проекты от инициации до завершения
                                                                    независимо от их специфики.</p>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </a></a>
                            </li>

                            <li class="lesson_link">
                                <a href="#" style="text-decoration:none"><a href="#" style="text-decoration:none">
                                        <div class="lesson__info">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="lesson__logo"><img class="img_lesson__logo"
                                                                src="img\png\slideshow.png" alt="">
                                                        </td>
                                                        <td class=" lesson___icon">
                                                            <a href="lesson1.php" style="text-decoration:none"><img
                                                                    class="img_lesson__icon" src="img\jpeg\cms.jpg"
                                                                    alt="" style="width:150px; height:75px;">
                                                            </a>
                                                        </td>
                                                        <td class="lesson___text">
                                                            <a href="lesson2.php"
                                                                style="text-decoration:none; color:white">
                                                                <h3 class="lesson_header"> Сиcтемы управления
                                                                    контентом (CMS)</h3>
                                                                <p>
                                                                    Что такое CMS? Популярные CMS.<br> WordPress:
                                                                    знакомство,
                                                                    установка CMS и администрирование.</p>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </a></a>
                            </li>

                            <li class="lesson_link">
                                <a href="#" style="text-decoration:none"><a href="#" style="text-decoration:none">
                                        <div class="lesson__info">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="lesson__logo"><img class="img_lesson__logo"
                                                                src="img\png\slideshow.png" alt="">
                                                        </td>
                                                        <td class=" lesson___icon">
                                                            <a href="lesson1.php" style="text-decoration:none"><img
                                                                    class="img_lesson__icon" src="img\png\wordpress.png"
                                                                    alt="" style="width:150px; height:75px;">
                                                            </a>
                                                        </td>
                                                        <td class="lesson___text">
                                                            <a href="lesson3.php"
                                                                style="text-decoration:none; color:white">
                                                                <h3 class="lesson_header"> WordPress</h3>
                                                                <p>
                                                                    Что такое WordPress?<br> Особенности распространения
                                                                    CMS
                                                                </p>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </a></a>
                            </li>

                        </ul>

                        <h1 class="Lesson_header">
                            Дополнительный материал
                        </h1>
                        <ul class="lesson_list">
                            <li class="lesson_link">
                                <a href="#">
                                    <div class="lesson__info">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="lesson__logo"><img class="img_lesson__logo"
                                                            src="img\png\description.png" alt="">
                                                    </td>
                                                    <td class=" lesson___icon">
                                                        <a href="lesson1.php"><img class="img_lesson__icon"
                                                                src="img\jpeg\cms.jpg" alt=""
                                                                style="width:150px; height:75px;"></a>
                                                    </td>
                                                    <td class="lesson___text">
                                                        <a href="lesson1.php" style="text-decoration:none; color:white">
                                                            <h3 class="lesson_header"> Сиcтемы управления
                                                                контентом (CMS)</h3>
                                                            <p>Информационные ресурсы:<br>

                                                                <a href="https://ru.wordpress.org/support/"
                                                                    target="_blank"
                                                                    style="text-decoration:none; color:white">
                                                                    WordPress</a><br>
                                                                <a href="https://www.joomla.org/" target="_blank"
                                                                    style="text-decoration:none; color:white">Joomla!
                                                                </a><br>
                                                                <a href="https://www.drupal.org/" target="_blank"
                                                                    style="text-decoration:none; color:white">Drupal</a>
                                                            </p>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>

    </div>

    </main>
    </div>
    <footer class="footer">

    </footer>
</body>

<?php else:
            header('Location: /signin.php');
        endif; ?>

</html>