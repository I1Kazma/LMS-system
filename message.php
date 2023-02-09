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
    <title>Сообщения</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css\left-menu.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/Inter-Thin.otf">
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
                        <li class="menu-nav"><a class="btn" href="">Сообщения</a></button></li>
                    </ul>
                </div>
                <div class="logout">
                    <li class="menu-nav">
                        <a class="btn_logout" href="logout.php">Выйти</a>
                    </li>
                </div>
            </div>

            <div class="support_box">
                <div class="support_wrapper">
                    <div class="support scale">
                        <img style="height: 30px; width: 30px; padding: 0 16px 0 12px;" src="img\png\otv-100.png"
                            alt="">
                        <p>Поддержка</p>
                    </div>
                    <div class="support scale">
                        <img style="height: 34px; width: 34px; padding: 0 12px 0 12px;" src="img\png\prep-100.png"
                            alt="">
                        <p>Преподаватель</p>
                    </div>
                </div>

                <div class="support_wrapper1">

                    <div class="support_text">
                        <!-- <p>Поле с сообщениями</p> -->
                    </div>

                    <div class="rendered-form">
                        <!-- <div class="support_box"> -->
                        <div class="support_box_input">

                            <div class="formbuilder-file form-group field-file-1670186579351 scale">
                                <label for="file-upload" class="custom-file-upload">
                                    <img style="height: 30px; width: 30px" src="img\png\skr.png">
                                </label>
                                <input id="file-upload" type="file" class="add_file" name="file-1670186579351[]"
                                    access="false" multiple="true" id="file-1670186579351">
                            </div>

                            <div class="formbuilder-textarea form-group field-textarea-1670186444979">
                                <!-- <label for="textarea-1670186444979" class="formbuilder-textarea-label">Текстовая область
                                </label> -->

                                <div class="textarea">
                                    <textarea type="textarea" class="" name="textarea-1670186444979" access="false"
                                        id="textarea-1670186444979" style="font-size: 16px;
    width: 100%;
    height: 24px;
    background-color: #ffffff;
    resize: none;"></textarea>
                                </div>
                            </div>

                            <div class="formbuilder">
                                <div class="formbuilder-button form-group field-button-1670186493608 scale">
                                    <button type="button" class="btn_mes" name="button-1670186493608" access="false"
                                        id="button-1670186493608"> <img style="height: 28px; width: 28px"
                                            src="img\png\sell.png">
                                    </button>
                                </div>
                            </div>

                        </div>
                        <!-- </div> -->
                    </div>
                </div>


            </div>

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
                                                alt=""></a></li>
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
                            <li class="menu-nav"><a class="btn" href="">Сообщения</a></button></li>
                        </ul>
                    </div>
                    <div class="logout">
                        <li class="menu-nav">
                            <a class="btn_logout" href="logout.php">Выйти</a>
                        </li>
                    </div>
                </div>

                <div class="support_box">
                    <div class="support_wrapper">
                        <div class="support scale">
                            <img style="height: 30px; width: 30px; padding: 0 16px 0 12px;" src="img\png\otv-100.png"
                                alt="">
                            <p>Поддержка</p>
                        </div>
                        <div class="support scale">
                            <img style="height: 34px; width: 34px; padding: 0 12px 0 12px;" src="img\png\prep-100.png"
                                alt="">
                            <p>John Doe</p>
                        </div>
                    </div>

                    <div class="support_wrapper1">

                        <div class="support_text">
                            <!-- <p>Поле с сообщениями</p> -->
                        </div>

                        <div class="rendered-form">
                            <!-- <div class="support_box"> -->
                            <div class="support_box_input">

                                <div class="formbuilder-file form-group field-file-1670186579351 scale">
                                    <label for="file-upload" class="custom-file-upload">
                                        <img style="height: 30px; width: 30px" src="img\png\skr.png">
                                    </label>
                                    <input id="file-upload" type="file" class="add_file" name="file-1670186579351[]"
                                        access="false" multiple="true" id="file-1670186579351">
                                </div>

                                <div class="formbuilder-textarea form-group field-textarea-1670186444979">
                                    <!-- <label for="textarea-1670186444979" class="formbuilder-textarea-label">Текстовая область
                                </label> -->

                                    <div class="textarea">
                                        <textarea type="textarea" class="form-control" name="textarea-1670186444979"
                                            access="false" id="textarea-1670186444979" style="font-size: 16px;
    width: 100%;
    height: 24px;
    background-color: #ffffff;
    resize: none;"></textarea>
                                    </div>
                                </div>

                                <div class="formbuilder">
                                    <div class="formbuilder-button form-group field-button-1670186493608 scale">
                                        <button type="button" class="btn_mes" name="button-1670186493608" access="false"
                                            id="button-1670186493608"> <img style="height: 28px; width: 28px"
                                                src="img\png\sell.png">
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <!-- </div> -->
                        </div>
                    </div>


                </div>



            </main>

            <footer class="footer">

            </footer>
    </div>
</body>

<?php else:
            header('Location: /signin.php');
        endif; ?>

</html>