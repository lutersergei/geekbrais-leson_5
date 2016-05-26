<?php
session_start();
$_SESSION['last_access'] = "Setting";
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
    <title>Настройки</title>
</head>
<body>
<p><a href="Inner_A.php">Страница 1</a></p>
<p><a href="Inner_B.php">Страница 2</a></p>
<p>Настройки</p>
<form method="post">
    <input type="submit" name="exit" value="Замести следы">
</form>
</body>
</html>

