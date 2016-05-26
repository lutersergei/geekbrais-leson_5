<?php
session_start();
$_SESSION['last_access'] = "Inner_B";
if (isset($_POST['exit']))
{
    session_unset();
    session_destroy();
    if (isset($_COOKIE['login'])) setcookie("login","",time() - 60);
    header("Location: index.php");
    die();
}
echo "<h1>Session</h1>";
var_dump($_SESSION);
echo "<h1>Cookies</h1>";
var_dump($_COOKIE);
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница 2</title>
</head>
<body>
<p><a href="Inner_A.php">Страница 1</a></p>
<p>Страница 2</p>
<p><a href="Setting.php">Настройки</a></p>
<form method="post">
    <input type="submit" name="exit" value="Замести следы">
</form>
</body>
</html>

