<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "You must log in to access this page. <a href='login.html'>Login here</a>";
    exit();
}

echo "Welcome to the Admin Panel, " . $_SESSION['username'] . "!";
?>