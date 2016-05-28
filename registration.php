<?php
error_reporting(E_ALL);
session_start();
define('GUEST', 'Гость');
define('YEAR', 60*60*24*365);
define('PASSWORD', 'admin');
define('THEME_1', "<link rel=\"stylesheet\" href=\"css/style_1.css\">");
define('THEME_2', "<link rel=\"stylesheet\" href=\"css/style_2.css\">");
define('THEME_3', "<link rel=\"stylesheet\" href=\"css/style_3.css\">");
if (isset($_SESSION['login']) || isset($_COOKIE['login']))         //Если мы залогинились, то невозможно зайти на страницу Регистрации
{
    if (isset($_SESSION['last_access']))
    {
        $location=$_SESSION['last_access'];
        header("Location: $location");
        die();
    }
    header("Location: Inner_A.php");
    die();
}
$warning="";
if (isset($_POST['login']) && isset($_POST['password']))                             //Обработка формы
{
    if ($_POST['password']==PASSWORD)
    {
        $_SESSION['login'] = $_POST['login'];
        if (isset($_POST['remember_me']))                   //Обработка галочки "Запомнить меня"
        {
            setcookie("login",$_POST['login'],time()+ YEAR);
        }
        header("Location: Inner_A.php");
        die();
    }
    //else $warning="<h3>Пароль неверный</h3>";
    else $warning="<div class=\"alert alert-danger\" role=\"alert\">
  <span class=\"glyphicon glyphicon-exclamation-sign\"></span>
  Пароль неверный (пароль:admin)</div>";
}
if (isset($_COOKIE['theme']))
{
    if ($_COOKIE['theme']=="Blue Theme")
    {
        $theme=THEME_1;
    }
    if ($_COOKIE['theme']=="Green Theme")
    {
        $theme=THEME_2;
    }
    if ($_COOKIE['theme']=="Orange Theme")
    {
        $theme=THEME_3;
    }
}
else $theme=THEME_1;
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <?php echo $theme?>
</head>
<body>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <section class="loginform">
    <form class="form-inline" method="post">
        <div class="form-group">
            <input type="text" class="form-control" required  placeholder="Name" name="login">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" required placeholder="Password" name="password">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember_me"> Запомнить меня
            </label>
        </div>
        <input type="submit" class="btn btn-default" value="Войти">

    </form>
    </section>
    </div>
    <div class="col-md-3"><?php
        echo "<h3>Session</h3>";
        var_dump($_SESSION);
        echo "<h3>Cookies</h3>";
        var_dump($_COOKIE);?>
    </div>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-2">
        <?php echo $warning?>
    </div>
</div>
</body>
</html>