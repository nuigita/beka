<?php
session_start();

// Здесь должна быть логика аутентификации пользователя

// Предположим, что для тестирования мы просто сравниваем введенные данные с предопределенными
$valid_username = "admin";
$valid_password = "password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: sait.html");
        exit;
    } else {
        echo "Неверное имя пользователя или пароль.";
    }
}
?>

