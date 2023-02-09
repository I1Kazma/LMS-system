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
    <link rel="stylesheet" href="css\left-menu.css">
    <link rel="stylesheet" href="css/lessons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts\Inter-Thin.otf">
</head>

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
                        <li class="menu-nav"><a class="btn" href="">CMS</a></button></li>
                    </ul>
                </div>
                <div class="logout">
                    <li class="menu-nav">
                        <a class="btn_logout" href="logoutAdmin.php">Выйти</a>
                    </li>
                </div>
            </div>


            <div class="lesson-page-block">
                <div class="container_lesson">
                    <div class="lesson_nav">
                        <div class="lesson_text"><a href="lesson1.php">
                                << Урок 1 </a>
                        </div>
                        <div class="lesson_text"><a href="lesson3.php">Урок 3 >></a></div>
                    </div>
                    <div>
                        <h1 class="lesson_header"> CMS </h1>
                    </div>
                    <div class="lesson_content">
                        <p>CMS (англ. Content Management System) — это система управления контентом сайта. На
                            профессиональном жаргоне CMS ещё называют «движок сайта». По данным агентства
                            W3Techs на CMS
                            работает больше половины сайтов в интернете.
                        <p>Как выбрать CMS?</p>
                        <div class="video">
                            <iframe width="900" height="400" src="https://www.youtube.com/embed/CG50u_YBxg8"
                                title="3.1.3 Как выбрать CMS" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        Примеры CMS: WordPress, Joomla! OpenCart.</p>
                        <p>На практике CMS — это веб-приложение, в котором люди создают и обслуживают сайты.
                            Основное
                            преимущество CMS — чтобы создать сайт и работать с ним не обязательно знать
                            программирование.</p><br>

                    </div>


                    <div class="lesson_comment">
                        <img src="uploads/avatars/<?php echo $user->avatar; ?>" class="comment_icon">
                        <textarea class="comment_textarea" placeholder="Ваш комментарий"></textarea>
                        <button type="submit" class="btn_send">
                            <p class="btn_send_text">Отправить</p>
                        </button>
                        <input type="file" style="padding-left:20px;">
                    </div>

                    <h2 class="comment_header">Комментарии</h2>

                    <div class="lesson_comment_text">
                        <img src="uploads/avatars/<?php echo $user->avatar; ?>" class="comment_icon">
                        <div class="comment_flex">
                            <p class="comment">
                                <?php echo $user->firstname; ?>
                            </p>
                            <p class="comment"> Все отлично!</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="wrapper">
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
                                        <li class="widget_list"><a href="training_list.php"><img
                                                    src="img\png\auto_stories.png" alt=""></a></li>
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
                                <li class="menu-nav"><a class="btn" href="training_list.php">Список
                                        тренингов</a></button></li>
                                <p class="strel_nav"><img src="img/svg/arrow_forward_ios.svg" alt=""></p>
                                <li class="menu-nav"><a class="btn" href="training.php">Web-разработчик</a></button>
                                </li>
                                <p class="strel_nav"><img src="img/svg/arrow_forward_ios.svg" alt=""></p>
                                <li class="menu-nav"><a class="btn" href="">CMS</a></button>
                                </li>
                            </ul>
                        </div>
                        <div class="logout" style=" width: 300px;
    display: flex;
    gap: 15px;">
                            <li class="menu-nav">
                                <a href="addcontent.php" class="change">Изменить материал</a>
                            </li>
                            <li class="menu-nav">
                                <a class="btn_logout" href="logoutAdmin.php">Выйти</a>
                            </li>
                        </div>
                    </div>


                    <div class="lesson-page-block">
                        <div class="container_lesson">
                            <div class="lesson_nav">
                                <div class="lesson_text"><a href="lesson1.php" class="lesson_text">
                                        << Урок 1 </a>
                                </div>
                                <div class="lesson_text"><a href="lesson3.php" class="lesson_text">Урок 3>></a></div>
                            </div>
                            <div class="lesson_header">
                                <h1 class="lesson_header"> CMS </h1>
                            </div>
                            <div class="lesson_content">
                                <p>CMS (англ. Content Management System) — это система управления контентом сайта.
                                    На
                                    профессиональном жаргоне CMS ещё называют «движок сайта». По данным агентства
                                    W3Techs на CMS
                                    работает больше половины сайтов в интернете.

                                    Примеры CMS: WordPress, Joomla! OpenCart.</p>
                                <p>На практике CMS — это веб-приложение, в котором люди создают и обслуживают сайты.
                                    Основное
                                    преимущество CMS — чтобы создать сайт и работать с ним не обязательно знать
                                    программирование.</p><br>
                                <p>Как выбрать CMS?</p>
                            </div>
                            <div class="video">
                                <iframe width="900" height="400" src="https://www.youtube.com/embed/CG50u_YBxg8"
                                    title="3.1.3 Как выбрать CMS" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="lesson_comment">
                                <img src="uploads/avatars/<?php echo $admin->avatar; ?>" class="comment_icon">
                                <textarea class="comment_textarea" placeholder="Ваш комментарий"></textarea>
                                <button type="submit" class="btn_send">
                                    <p class="btn_send_text">Отправить</p>
                                </button>
                                <input type="file" style="padding-left:20px;">
                            </div>

                            <h2 class="comment_header">Комментарии</h2>

                            <div class="lesson_comment_text">
                                <img src="uploads/avatars/<?php echo $admin->avatar; ?>" class="comment_icon">
                                <div class="comment_flex">
                                    <p class="comment">
                                        <?php echo $admin->firstname; ?>
                                    </p>
                                    <p class="comment"> Все отлично!</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </main>

                <footer class=" footer">

                </footer>
</body>

<?php else:
            header('Location: /signin.php');
        endif; ?>

</html>