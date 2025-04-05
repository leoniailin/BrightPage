<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Store credentials in a file
    $file = fopen("credentials.txt", "a");
    fwrite($file, $username . "," . $password . "\n");
    fclose($file);

    echo "Registration successful! <a href='login.html'>Login here</a>";
}
?>