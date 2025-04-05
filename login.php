<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check against hardcoded credentials
    if ($username === 'hui' && $password === 'ldyistopuser22880012') {
        $_SESSION['username'] = $username;
        header("Location: admin.php");
    } else {
        echo "Invalid username or password! <a href='login.html'>Try again</a>";
    }
}
?>