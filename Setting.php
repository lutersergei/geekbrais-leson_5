<?php
session_start();
define('YEAR', 60*60*24*365);
$_SESSION['last_access'] = "Setting";
if (isset($_POST['exit']))
{
    session_unset();
    session_destroy();
    if (isset($_COOKIE['login']))
    {
        setcookie("login","",time() - 60);
       // setcookie("theme","",time() - 60);
    }
    header("Location: index.php");
    die();
}
if (isset($_POST['theme']))
{
    setcookie("theme",$_POST['theme'],time()+ YEAR);
    header("Location: Setting.php");
    die();
}
if (isset($_COOKIE['theme']))
{
    if ($_COOKIE['theme']=="Wood Theme")
    {
        $theme="<link rel=\"stylesheet\" href=\"css/style_1.css\">";
    }
    if ($_COOKIE['theme']=="Dark Theme")
    {
        $theme="<link rel=\"stylesheet\" href=\"css/style_2.css\">";
    }
    if ($_COOKIE['theme']=="Theme")
    {
        $theme="<link rel=\"stylesheet\" href=\"css/style_3.css\">";
    }
}
else $theme="<link rel=\"stylesheet\" href=\"css/style_1.css\">";
//echo "<h1>Session</h1>";
//var_dump($_SESSION);
//echo "<h1>Cookies</h1>";
//var_dump($_COOKIE);
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Настройки</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php echo $theme?>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation"><a href="Inner_A.php">Страница 1</a></li>
                <li role="presentation"><a href="Inner_B.php">Страница 2</a></li>
                <li role="presentation" class="active"><a href="#">Настройки</a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <form method="post">
                <br>

                <input type="submit" class="btn btn-primary" name="theme" value="Wood Theme">
                <input type="submit" class="btn btn-primary" name="theme" value="Dark Theme">
                <input type="submit" class="btn btn-primary" name="theme" value="Theme">
            </form>
            <form method="post">
                <button class="btn btn-danger" type="submit" name="exit">Выйти</button>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>

