<?php
session_start();
echo "<h1>Session</h1>";
var_dump($_SESSION);
echo "<h1>Cookies</h1>";
var_dump($_COOKIE);
if (isset($_SESSION['login'])&&($_SESSION['last_access']))      
{
    if ($_SESSION['last_access']=='Inner_A')
    {
        header("Location: Inner_A.php");
    }
    if ($_SESSION['last_access']=='Inner_B')
    {
        header("Location: Inner_B.php");
    }
    
    else header("Location: Setting.php");
}
elseif (isset($_COOKIE['login']))
{
    $_SESSION['login'] = $_COOKIE['login'];
    header("Location: Inner_A.php");
    die();
}
else header("Location: Registration.php");
?>