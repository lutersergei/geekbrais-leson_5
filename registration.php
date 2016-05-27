<?php
session_start();
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
$theme="<link rel=\"stylesheet\" href=\"css/style_1.css\">";
if (isset($_COOKIE['theme']))
{
    if ($_COOKIE['theme']=="Blue Theme")
    {
        $theme="<link rel=\"stylesheet\" href=\"css/style_1.css\">";
    }
    if ($_COOKIE['theme']=="Green Theme")
    {
        $theme="<link rel=\"stylesheet\" href=\"css/style_2.css\">";
    }
    if ($_COOKIE['theme']=="Orange Theme")
    {
        $theme="<link rel=\"stylesheet\" href=\"css/style_3.css\">";
    }
}
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
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <section class="loginform ">
    <form class="form-inline" method="post">
        <div class="form-group">
            <label class="sr-only" for="login">Email address</label>
            <input type="text" class="form-control" required  placeholder="Name" name="login">
        </div>
        <div class="form-group">
            <label class="sr-only" for="password">Password</label>
            <input type="password" class="form-control" disabled="disabled" name="password" placeholder="Password">
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
    <div class="col-md-4"><?php
        echo "<h3>Session</h3>";
        var_dump($_SESSION);
        echo "<h3>Cookies</h3>";
        var_dump($_COOKIE);?>
    </div>
</div>
</body>
</html>