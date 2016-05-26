<?php
session_start();
echo "<h1>Session</h1>";
var_dump($_SESSION);
echo "<h1>Cookies</h1>";
var_dump($_COOKIE);
if (isset($_SESSION['login']))
{
    header("Location: Inner_A.php");
}
else
{
    if (isset($_COOKIE['login']))
    {
        $_SESSION['login'] = $_COOKIE['login'];
        header("Location: index.php");
        die();
    }
    else header("Location: registration.php");
}
?>