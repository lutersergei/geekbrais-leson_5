<?php
session_start();
echo "<h1>Session</h1>";
var_dump($_SESSION);
echo "<h1>Cookies</h1>";
var_dump($_COOKIE);
define('GUEST', 'Гость');
define('YEAR', 60*60*24*365);
if (isset($_POST['login']))
{
    $_SESSION['login'] = $_POST['login'];
    if (isset($_POST['remember_me']))
    {
        setcookie("login",$_POST['login'],time()+ YEAR);
    }
    header("Location: Inner_A.php");
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <h3>Форма входа</h3>
    <label>Введите имя пользователя
        <input type="text" name="login" placeholder="Имя пользователя">
    </label>
    <label>Запомнить меня
        <input type="checkbox" name="remember_me" value="1">
    </label> <br>
    <input type="submit" value="Войти">
</form>
</body>
</html>