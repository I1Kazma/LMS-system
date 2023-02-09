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
    <title>Каспийская гимназия</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/left-menu.css">
    <link rel="stylesheet" href="fonts/Inter-V.otf">
</head>

<style>
    a {
        text-decoration: none;
        color: white
    }
</style>

<body>

    <main>
        <?php if ($user): ?>
        <header class="header">
            <div class="container">
                <div class="widget">
                    <div class="scale">
                        <p><img class="logo" src="img\png\logo_.png" alt="Logo">
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
                                <li class="widget_list"><a href="training_list.php"><img src="img\png\auto_stories.png"
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
                    <li class="menu-nav"><a class="btn" href="">Список тренингов</a></button></li>
                </ul>
            </div>
            <div class="logout">
                <li class="menu-nav">
                    <a class="btn_logout" href="logout.php">Выйти</a>
                </li>
            </div>
        </div>

        <div class=main-page-block>
            <div class="container_lesson">
                <h1 class="Lesson_header">
                    Доступные тренинги
                </h1>

                <ul class="lesson_list">
                    <li class="lesson_link">
                        <a href="training.php"><a href="training.php">
                                <div class="lesson__info">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class=" lesson___icon">
                                                    <a href="training.php"><img class="img_lesson__icon"
                                                            src="img\jpeg\cms.jpg" alt=""
                                                            style="width:150px; height:75px;"></a>
                                                </td>
                                                <td class="lesson___text">
                                                    <a href="training.php" style="text-decoration:none; color:white">
                                                        <h2 class="lesson_header"> Web-разработчик</h2>
                                                        <p>
                                                            Курс «WEB-разработчик» нацелен на получение
                                                            слушателями
                                                            профессиональных компетенций по созданию и
                                                            поддержке
                                                            WEB-сайтов и приложений для различных сфер
                                                            цифровой
                                                            экономики.</p>
                                                    </a>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a></a>
                    </li>

                    <li class="lesson_link">
                        <a href="training.php"><a href="training.php">
                                <div class="lesson__info">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class=" lesson___icon">
                                                    <a href="training.php"><img class="img_lesson__icon"
                                                            src="img\jpeg\cms.jpg" alt=""
                                                            style="width:150px; height:75px;"></a>
                                                </td>
                                                <td class="lesson___text">
                                                    <a href="training.php" style="text-decoration:none; color:white">
                                                        <h2 class="lesson_header"> UX/UI дизайнер</h2>
                                                        <p>
                                                            Курс «Дизайнер UI / UX» нацелен на получения
                                                            навыков для проектирования пользовательского
                                                            интерфейса в современных компаниях в условиях
                                                            цифровой трансформации</p>
                                                    </a>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a></a>
                    </li>

                    <li class="lesson_link">
                        <a href="training.php"><a href="training.php">
                                <div class="lesson__info">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class=" lesson___icon">
                                                    <a href="training.php"><img class="img_lesson__icon"
                                                            src="img\jpeg\cms.jpg" alt=""
                                                            style="width:150px; height:75px;"></a>
                                                </td>
                                                <td class="lesson___text">
                                                    <a href="training.php" style="text-decoration:none; color:white">
                                                        <h2 class="lesson_header"> UX/UI дизайнер</h2>
                                                        <p>
                                                            Курс «Менеджер IT-проектов» нацелен на получение
                                                            профессиональных компетенций для управления
                                                            процессом разработки IT-проектов и принятия
                                                            управленческих решений в современных компаниях в
                                                            условиях цифровой трансформации.</p>
                                                    </a>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a></a>
                    </li>

                    <li class="lesson_link">
                        <a href="training.php"><a href="training.php">
                                <div class="lesson__info">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class=" lesson___icon">
                                                    <a href="training.php"><img class="img_lesson__icon"
                                                            src="img\jpeg\cms.jpg" alt=""
                                                            style="width:150px; height:75px;"></a>
                                                </td>
                                                <td class="lesson___text">
                                                    <a href="training.php" style="text-decoration:none; color:white">
                                                        <h2 class="lesson_header"> Digital
                                                            маркетолог
                                                        </h2>
                                                        <p>
                                                            Курс «Digital маркетолог» нацелен на получение
                                                            навыков построения и реализации эффективной,
                                                            прозрачной и управляемой digital маркетинговой
                                                            стратегии предприятия для осуществления
                                                            поддержки принятия управленческих решений в
                                                            компаниях.</p>
                                                    </a>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a></a>
                    </li>
                </ul>

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
                <div class="container_nav">
                    <div class="nav">
                        <ul class="ul-nav">
                            <li class="menu-nav"><a class="btn" href="">Список тренингов</a></button></li>
                        </ul>
                    </div>
                    <div class="logout" style=" width: 300px;
    display: flex;
    gap: 15px;">
                        <li class="menu-nav">
                            <a href="addtraining.php" class="change">Добавить тренинг</a>
                        </li>
                        <li class="menu-nav">
                            <a class="btn_logout" href="logoutAdmin.php">Выйти</a>
                        </li>
                    </div>
                </div>

                <div class=main-page-block>
                    <div class="container_lesson">
                        <h1 class="Lesson_header">
                            Доступные тренинги
                        </h1>

                        <ul class="lesson_list">
                            <li class="lesson_link">
                                <a href="training.php"><a href="training.php">
                                        <div class="lesson__info">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class=" lesson___icon">
                                                            <a href="training.php"><img class="img_lesson__icon"
                                                                    src="img\jpeg\cms.jpg" alt=""
                                                                    style="width:150px; height:75px;"></a>
                                                        </td>
                                                        <td class="lesson___text">
                                                            <a href="training.php"
                                                                style="text-decoration:none; color:white">
                                                                <h2 class="lesson_header"> Web-разработчик</h2>
                                                                <p>
                                                                    Курс «WEB-разработчик» нацелен на получение
                                                                    слушателями
                                                                    профессиональных компетенций по созданию и
                                                                    поддержке
                                                                    WEB-сайтов и приложений для различных сфер
                                                                    цифровой
                                                                    экономики.</p>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </a></a>
                            </li>

                            <li class="lesson_link">
                                <a href="training.php"><a href="training.php">
                                        <div class="lesson__info">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class=" lesson___icon">
                                                            <a href="training.php"><img class="img_lesson__icon"
                                                                    src="img\jpeg\cms.jpg" alt=""
                                                                    style="width:150px; height:75px;"></a>
                                                        </td>
                                                        <td class="lesson___text">
                                                            <a href="training.php"
                                                                style="text-decoration:none; color:white">
                                                                <h2 class="lesson_header"> UX/UI дизайнер</h2>
                                                                <p>
                                                                    Курс «Дизайнер UI / UX» нацелен на получения
                                                                    навыков для проектирования пользовательского
                                                                    интерфейса в современных компаниях в условиях
                                                                    цифровой трансформации</p>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </a></a>
                            </li>

                            <li class="lesson_link">
                                <a href="training.php"><a href="training.php" style="text-decoration:none; color:white">
                                        <div class="lesson__info">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class=" lesson___icon">
                                                            <a href="training.php"><img class="img_lesson__icon"
                                                                    src="img\jpeg\cms.jpg" alt=""
                                                                    style="width:150px; height:75px;"></a>
                                                        </td>
                                                        <td class="lesson___text">
                                                            <a href="training.php"
                                                                style="text-decoration:none; color:white">
                                                                <h2 class="lesson_header"> UX/UI дизайнер</h2>
                                                                <p>
                                                                    Курс «Менеджер IT-проектов» нацелен на получение
                                                                    профессиональных компетенций для управления
                                                                    процессом разработки IT-проектов и принятия
                                                                    управленческих решений в современных компаниях в
                                                                    условиях цифровой трансформации.</p>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </a></a>
                            </li>

                            <li class="lesson_link">
                                <a href="training.php"><a href="training.php">
                                        <div class="lesson__info">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class=" lesson___icon">
                                                            <a href="training.php"><img class="img_lesson__icon"
                                                                    src="img\jpeg\cms.jpg" alt=""
                                                                    style="width:150px; height:75px;"></a>
                                                        </td>
                                                        <td class="lesson___text">
                                                            <a href="training.php"
                                                                style="text-decoration:none; color:white">
                                                                <h2 class="lesson_header"> Digital
                                                                    маркетолог
                                                                </h2>
                                                                <p>
                                                                    Курс «Digital маркетолог» нацелен на получение
                                                                    навыков построения и реализации эффективной,
                                                                    прозрачной и управляемой digital маркетинговой
                                                                    стратегии предприятия для осуществления
                                                                    поддержки принятия управленческих решений в
                                                                    компаниях.</p>
                                                            </a>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </a></a>
                            </li>
                        </ul>
                        <?php else:
            header('Location: /signin.php');
        endif; ?>

                    </div>
    </main>