<?php
session_start();
if (isset($_SESSION['login'])&&($_SESSION['last_access']))      //Переадресация на последнюю посещенную страницу происходит
{                                                               //только если сохранена последняя сессия
    $location=$_SESSION['last_access'];                         //(думаю в куках хранить последнюю посещенную страницу неоправдано)
    header("Location: $location");
    die();
}
elseif (isset($_COOKIE['login']))                   //Если мы выходили из браузера, но не разлогинились, то переход на Первую страницу
{
    $_SESSION['login'] = $_COOKIE['login'];
    header("Location: Inner_A.php");
    die();
}
else header("Location: Registration.php");          //Если разлогинились, то переадресация на страницу регистрации