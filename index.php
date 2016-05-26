<?php

define("TIME_YEAR" , 3600*24*365);
define("USER_GUEST", 'Гость');

if (isset($_POST['action']))
{
    if (($_POST['action']=='login')&&(!isset($_COOKIE['name'])))
    {
        setcookie("name", md5(time()), time() + TIME_YEAR);
        header("Location:/");
        die();
    }
    if (($_POST['action']=='logout'))
    {
        setcookie("name", "", time() - 60);
        header("Location:/");
        die();
    }
}
if (isset($_COOKIE['name']))
{
    $name = $_COOKIE['name'];

}
else
{
    $name = USER_GUEST;
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>Привет, <?php echo $name?></h3>
<?php if ($name===USER_GUEST)
{ ?>
    <form method="post">
        <input type="hidden" name="action" value="login"/>
        <input type="submit" value="Войти"/>
    </form>
    <?php
}

else
{ ?>
    <form method="post">
        <input type="hidden" name="action" value="logout"/>
        <input type="submit" value="Выйти"/>
    </form>
<?php
}
?>
</body>
</html>