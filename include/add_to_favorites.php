<?php
session_start();
require_once("db_connect.php");

if (!isset($_SESSION['user']['id'])) {
    // Если пользователь не авторизован, перенаправляем его на страницу авторизации или выводим сообщение об ошибке
    echo "Ошибка: Пользователь не авторизован.";
    exit(); // Прерываем выполнение скрипта
}

$user_id = $_SESSION['user']['id'];

// Проверка подключения
if ($mysqli->connect_error) {
    die("Ошибка подключения к базе данных: " . $mysqli->connect_error);
}

// Проверка наличия параметра id в запросе
if (isset($_GET['id'])) {
    // Защита от SQL-инъекций
    $id = $mysqli->real_escape_string($_GET['id']);

    // Подготовка SQL запроса для выборки данных из таблицы catalog
    $sql = "SELECT title, image, current_price, old_price FROM catalog WHERE id = '$id'
    UNION
    SELECT title, image, current_price, old_price FROM promotion WHERE id = '$id'";

    // Выполнение SQL запроса
    $result = $mysqli->query($sql);

    if ($result) {
        // Получение результата запроса
        $row = $result->fetch_assoc();

        // Защита от SQL-инъекций для полученных данных
        $title = $mysqli->real_escape_string($row['title']);
        $image = $mysqli->real_escape_string($row['image']);
        $current_price = $mysqli->real_escape_string($row['current_price']);
        $old_price = $mysqli->real_escape_string($row['old_price']);

        // Подготовка SQL запроса для добавления товара в таблицу favorites
        $insert_sql = "INSERT INTO favorites (title, image, current_price, old_price, user_id) 
                       VALUES ('$title', '$image', '$current_price', '$old_price', '$user_id')";

        // Выполнение SQL запроса для добавления товара
        if ($mysqli->query($insert_sql) === TRUE) {
            echo "Товар успешно добавлен в избранное.";
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit(); // Прерываем выполнение скрипта
        } else {
            echo "Ошибка: " . $insert_sql . "<br>" . $mysqli->error;
        }
    } else {
        echo "Ошибка: " . $sql . "<br>" . $mysqli->error;
    }
} else {
    echo "Ошибка: Не указан идентификатор товара.";
}

// Закрытие соединения с базой данных
$mysqli->close();
