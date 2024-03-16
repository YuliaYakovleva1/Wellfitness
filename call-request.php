<?php
session_start();
include ('include/db_connect.php');
$user = isset ($_SESSION['user']['id']);

if (isset ($_POST["submit_call"])) {
    $error = array();

    // Проверка на наличие ошибок при вводе данных
    if (count($error)) {
        $_SESSION['message'] = "<p id='form-error'>" . implode('<br />', $error) . "</p>";
    } else {
        $username = $_POST['username'];
        $phone = $_POST['phone'];

        $query = "INSERT INTO call_request (username, phone) 
                  VALUES ('" . mysqli_real_escape_string($mysqli, $username) . "', 
                          '" . mysqli_real_escape_string($mysqli, $phone) . "')";

        $result = mysqli_query($mysqli, $query) or die ("Ошибка " . mysqli_error($mysqli));

        // Если запрос выполнен успешно, выводим сообщение о благодарности
        if ($result) {
            $_SESSION['message'] = "Спасибо, мы скоро свяжемся с Вами!";
        } else {
            $_SESSION['message'] = "Произошла ошибка. Пожалуйста, попробуйте еще раз.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WellFitness</title>

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/pages.css">
</head>

<body>

    <?php include_once ('include/header.php') ?>

    <main>
        <div class="container-full aut" style="text-align: center;">
            <div style="height: 480px;">
                <div class="overlay"></div>
                <div style="width: 540px; margin: 0 auto; height: 380px; background-color: #fff; border-radius: 6px;">
                    <h2 class="popup__title" style="margin-top: 100px; padding-top: 50px;">Заказать звонок</h2>
                    <form class="popup__form" enctype="multipart/form-data" method="post">
                        <input type="text" id="username" name="username" placeholder="Ваше имя" required><br><br>
                        <input type="tel" id="phone" name="phone" placeholder="Ваш телефон" required><br><br>
                        <button class="main__btn" type="submit" name="submit_call">Отправить</button>
                    </form>
                    <div></div>
                </div>
            </div>
        </div>



        <?php include_once ('include/footer.php') ?>

        <script src="js/script.js"></script>
</body>

</html>