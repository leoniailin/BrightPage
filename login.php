<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check credentials
    $file = fopen("credentials.txt", "r");
    $valid_user = false;

    while (($line = fgets($file)) !== false) {
        list($stored_username, $stored_password) = explode(",", trim($line));

        if ($username === $stored_username && $password === $stored_password) {
            $valid_user = true;
            $_SESSION['username'] = $username;
            break;
        }
    }

    fclose($file);

    if ($valid_user) {
        header("Location: admin.php");
    } else {
        echo "Invalid username or password! <a href='login.html'>Try again</a>";
    }
}
?>