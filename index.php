<?php
if (isset($_SESSION['login']))
{
    
}
else
{
    if (isset($_COOKIE['login']))
    {
        $_SESSION['login'] = $_COOKIE['login'];
    }
    else header("Location: registration.php");
}
?>