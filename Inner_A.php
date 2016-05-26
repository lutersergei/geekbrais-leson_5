<?php
session_start();
echo "<h1>Session</h1>";
var_dump($_SESSION);
echo "<h1>Cookies</h1>";
var_dump($_COOKIE);
?>