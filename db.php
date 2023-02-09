<?php
require "libs/rb.php";

R::setup('mysql:host=localhost;dbname=cwa', 'root', '12345');

session_start();

function showError($errors)
{
    return array_shift($errors);
}

function avatarSecurity($avatar)
{
    $name = $avatar['name'];
    $type = $avatar['type'];
    $size = $avatar['size'];
    $blacklist = array(".php", ".js", ".html");

    foreach ($blacklist as $row) {
        if (preg_match("/$row\$/i", $name))
            return false;
    }

    if (($type != "image/png") && ($type != "image/jpg") && ($type != "image/jpeg"))
        return false;
    if ($size > 5 * 1024 * 1024)
        return false;

    return true;
}


function loadAvatar($avatar)
{
    $type = $avatar['type'];
    $name = md5(microtime()) . '.' . substr($type, strlen("image/"));
    $dir = 'uploads/avatars/';
    $uploadfile = $dir . $name;

    if (move_uploaded_file($avatar['tmp_name'], $uploadfile)) {
        $user = R::findOne('users', 'id=?', array($_SESSION['user']->id));
        $user->avatar = $name;
        R::store($user);
    } else {
        return false;
    }
    return true;
}

function loadAvatarAdmin($avatar)
{
    $type = $avatar['type'];
    $name = md5(microtime()) . '.' . substr($type, strlen("image/"));
    $dir = 'uploads/avatars/';
    $uploadfile = $dir . $name;

    if (move_uploaded_file($avatar['tmp_name'], $uploadfile)) {
        $admin = R::findOne('admins', 'id=?', array($_SESSION['admin']->id));
        $admin->avatar = $name;
        R::store($admin);
    } else {
        return false;
    }
    return true;
}


?>