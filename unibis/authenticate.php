<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// Contoh autentikasi sederhana
if ($username == 'admin' && $password == 'admin') {
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
} else {
    header('Location: login.php?error=invalid');
}
?>