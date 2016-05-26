<?php
/**
 * Created by PhpStorm.
 * User: Dusty
 * Date: 24.05.2016
 * Time: 21:42
 */
session_start();

define("TIME_YEAR", 60*60*24*365);
define("USER_GUEST", "Гость");

if (isset($_POST['action']))
{
    if (($_POST['action'] === 'login')&&(!isset($_SESSION['name'])))
    {
        $_SESSION['name'] = $_POST['name'];

        if (isset($_POST['remember']))
        {
            setcookie("name",$_POST['name'],time() + TIME_YEAR);
        }
        header("Location: lesson6.php");
        die();
    }
    if ($_POST['action'] === 'logout')
    {
        unset($_SESSION['name']);
        session_destroy();
        if (isset($_COOKIE['name'])) setcookie("name","",time() - 60);
        header("Location: lesson6.php");
        die();
    }
}


if (isset($_SESSION['name']))
{
    $name = $_SESSION['name'];
}
else
{
    if (isset($_COOKIE['name']))
    {
        $_SESSION['name'] = $_COOKIE['name'];
        $name = $_SESSION['name'];
    }
    else
    {
        $name = USER_GUEST;
    }
}



echo "<h1>Session</h1>";
var_dump($_SESSION);
echo "<h1>Cookies</h1>";
var_dump($_COOKIE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    echo "<h3>Привет, {$name}</h3>";
?>
<?php
if ($name === USER_GUEST)
{
    ?>
    <form method="post">
        <input type="hidden" name="action" value="login"/>
        <input type="text" name="name"/>
        <input type="checkbox" value="1" name="remember"/> Запомнить меня
        <input type="submit" value="Войти"/>
    </form>
    <?php
}
else
{

?>
    <form method="post">
        <input type="hidden" name="action" value="logout"/>
        <input type="submit" value="Выйти"/>
    </form>
<?php
}

?>
</body>
</html>
