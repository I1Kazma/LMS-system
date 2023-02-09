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
                        <li class="menu-nav"><a class="btn" href="">WordPress</a></button></li>
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
                        <div class="lesson_text"><a href="lesson2.php">
                                << Урок 2 </a>
                        </div>
                        <div class="lesson_text"><a href="#"></a></div>
                    </div>
                    <div>
                        <h1 class="lesson_header"> WordPress </h1>
                    </div>
                    <div class="lesson_content">
                        <p>Страница сайта и Страница в WordPress могут означать совершенно разные вещи. Под страницей
                            сайта мы подразумеваем… да тут и объяснять нечего, всё и так понятно, да и синонимов этому
                            слову не найти, можно разве что привести примеры «главная страница, страница новости,
                            страница контактов, страница товара, страница категории товаров, страница группы вконтакте в
                            конце концов.

                            Весь контент сайта условно можно разделить на три типа:

                            То, что постоянно добавляется на сайт и отправляется в RSS-ленту — собственно это и есть
                            посты блога, в стандартных шаблонах у них указывается дата под заголовком, внешним видом они
                            обычно не отличаются, если только не используются форматы постов или какой-то навороченный
                            функционал. Записи — основной контент блога, но на сайте-визитке могут и не использоваться
                            вообще.

                            Категории для описанного выше. Постов на блоге может быть и больше 1000 и поэтому, чтобы
                            хоть как-то это организовать, существуют рубрики и метки. Назовем этот тип контента —
                            архивы. Иногда на главной странице сайта, при указании соответствующей настройки, могут
                            выводиться все записи блога, иными словами — это страница архива записей. Также бывают
                            архивы по дате (например, архив за 2015-й год или архив за декабрь 2015-го).

                            Когда нужно соорудить любую нестандартную страницу — используются Страницы WordPress. C виду
                            они могут показаться похожими на записи, но, во-первых, у них нет организации по рубрикам и
                            меткам (понятное дело — можно и добавить), во-вторых, они не постятся в ленту постов на
                            главной и в RSS, в третьих, у них есть иерархия (одна страница может быть родительской для
                            других), в-четвертых, у них есть функционал шаблонов страниц, который позволяет вытворять
                            абсолютно что угодно! В качестве примера — Страницы WordPress помогут вам создать форму
                            обратной связи на сайте, какой-нибудь красивый лендинг (посадочную страницу), калькулятор
                            ваших услуг и так далее и тому подобное.</p>
                        <br>
                    </div>

                    <h2 class="comment_header">Комментарии</h2>

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
                                <li class="menu-nav"><a class="btn" href="">WordPress</a></button>
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
                                <div class="lesson_text"><a href="lesson2.php" class="lesson_text">
                                        << Урок 2 </a>
                                </div>
                                <div class="lesson_text"><a href="#" class="lesson_text"></a></div>
                            </div>
                            <div class="lesson_header">
                                <h1 class="lesson_header"> WordPress </h1>
                            </div>
                            <div class="lesson_content">
                                <p>Страница сайта и Страница в WordPress могут означать совершенно разные вещи. Под
                                    страницей сайта мы подразумеваем… да тут и объяснять нечего, всё и так понятно, да и
                                    синонимов этому слову не найти, можно разве что привести примеры «главная страница,
                                    страница новости, страница контактов, страница товара, страница категории товаров,
                                    страница группы вконтакте в конце концов.

                                    Весь контент сайта условно можно разделить на три типа:

                                    То, что постоянно добавляется на сайт и отправляется в RSS-ленту — собственно это и
                                    есть посты блога, в стандартных шаблонах у них указывается дата под заголовком,
                                    внешним видом они обычно не отличаются, если только не используются форматы постов
                                    или какой-то навороченный функционал. Записи — основной контент блога, но на
                                    сайте-визитке могут и не использоваться вообще.

                                    Категории для описанного выше. Постов на блоге может быть и больше 1000 и поэтому,
                                    чтобы хоть как-то это организовать, существуют рубрики и метки. Назовем этот тип
                                    контента — архивы. Иногда на главной странице сайта, при указании соответствующей
                                    настройки, могут выводиться все записи блога, иными словами — это страница архива
                                    записей. Также бывают архивы по дате (например, архив за 2015-й год или архив за
                                    декабрь 2015-го).

                                    Когда нужно соорудить любую нестандартную страницу — используются Страницы
                                    WordPress. C виду они могут показаться похожими на записи, но, во-первых, у них нет
                                    организации по рубрикам и меткам (понятное дело — можно и добавить), во-вторых, они
                                    не постятся в ленту постов на главной и в RSS, в третьих, у них есть иерархия (одна
                                    страница может быть родительской для других), в-четвертых, у них есть функционал
                                    шаблонов страниц, который позволяет вытворять абсолютно что угодно! В качестве
                                    примера — Страницы WordPress помогут вам создать форму обратной связи на сайте,
                                    какой-нибудь красивый лендинг (посадочную страницу), калькулятор ваших услуг и так
                                    далее и тому подобное.</p>
                                <br>
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