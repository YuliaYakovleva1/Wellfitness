<?php
session_start();
include ('include/db_connect.php');
$user = isset ($_SESSION['user']['id']);
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
                    <h2 class="popup__title" style="margin-top: 100px; padding-top: 50px;">Вход в личный кабинет</h2>
                    <form class="popup__form" enctype="multipart/form-data" method="post" action="include/aut.php">
                        <input type="email" name="email" placeholder="Email" required><br><br>
                        <input type="password" name="password" placeholder="Пароль" required><br><br>
                        <button type="submit" class="main__btn">Войти</button>
                        <a href="#" class="form__reg" onclick="openPopup()">Зарегистрироваться</a>
                    </form>
                    <div></div>
                </div>

                <div class="overlay"></div>
                <div class="popup">
                    <span class="close" onclick="closePopup3()">&times;</span>
                    <h2 class="popup__title">Регистрация</h2>
                    <form class="popup__form" enctype="multipart/form-data" method="post" action="include/reg.php">
                        <input type="text" name="name" placeholder="Имя*" required><br><br>
                        <input type="email" name="email" placeholder="Email*" required><br><br>
                        <input type="phone" name="phone" placeholder="Телефон*" required><br><br>
                        <input type="password" name="password" placeholder="Пароль*" required><br><br>
                        <input type="password" name="password_repeat" placeholder="Повторить пароль*" required><br><br>
                        <div><input type="text" name="rights" value="user" style="display: none;"></div>
                        <button type="submit" class="main__btn">Зарегистрироваться</button>
                        <p class="registration__rec" style="margin-top: 16px;">Пароль должен быть не менее 6 символов
                            длиной. <br>
                            *Поля, обязательные для заполнения.</p>
                    </form>
                </div>
                <div class="overlay"></div>

            </div>
        </div>



        <?php include_once ('include/footer.php') ?>

        <script src="js/script.js"></script>
</body>

</html>