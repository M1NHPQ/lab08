<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'password123'){
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
    exit;
}
else {
    echo "Invalid login. Redirecting back to login.html";
    sleep(5);
    header('Location: login.html');
    exit;
}
?>