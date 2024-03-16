<?php
session_start();
require_once ("db_connect.php");

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$password_repeat = $_POST["password_repeat"];
$rights = $_POST["rights"];

if ($password === $password_repeat) {
        $sql = "INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `rights`)
            VALUES 
            (NULL, '$name', '$email', '$phone', '$password', '$rights')
    ";
        mysqli_query($mysqli, $sql);

        $user_sql = "SELECT * FROM `user` WHERE `email` = '$email'";
        $user_result = mysqli_query($mysqli, $user_sql);
        $user = mysqli_fetch_assoc($user_result);

        // Сохранение данных пользователя в сессии
        $_SESSION['user'] = $user;

        $_SESSION['message'] = 'Registration was successful!';
        header('Location: ../lk.php');

} else {
        $_SESSION['message'] = 'Passwords dont match!';
        header("Location: {$_SERVER['HTTP_REFERER']}");
}