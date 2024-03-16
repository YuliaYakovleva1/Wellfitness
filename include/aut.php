<?php
session_start();
require_once ("db_connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

// Проверяем, существует ли пользователь с введенным email и паролем
$check_user = mysqli_query($mysqli, "SELECT * FROM `user` 
                            WHERE `email` = '$email' AND `password` = '$password'");

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);

    // Авторизуем пользователя, устанавливая соответствующие значения в сессию
    $_SESSION['user'] = [
        "id" => $user["id"],
        "email" => $user["email"],
        "rights" => $user["rights"]
    ];

    // Перенаправляем пользователя на страницу личного кабинета
    header('Location: ../lk.php');
    exit(); // Прерываем выполнение скрипта после перенаправления
} else {
    // Если пользователь не найден, устанавливаем сообщение об ошибке в сессию и перенаправляем его обратно
    $_SESSION['message'] = 'Passwords dont match!';
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit(); // Прерываем выполнение скрипта после перенаправления
}