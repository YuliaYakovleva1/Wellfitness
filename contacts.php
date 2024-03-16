<?php
session_start();
include ('include/db_connect.php');
$user = isset ($_SESSION['user']['id']);

if (isset ($_POST["submit"])) {
    $error = array();

    if (count($error)) {
        $_SESSION['message'] = "<p id='form-error'>" . implode('<br />', $error) . "</p>";
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $text = $_POST['text'];

        $query = "INSERT INTO appeal (  username, email, text  ) 
    VALUES ( '" . mysqli_real_escape_string($mysqli, $username) . "', 
    '" . mysqli_real_escape_string($mysqli, $email) . "',
    '" . mysqli_real_escape_string($mysqli, $text) . "'
    )";

        $result = mysqli_query($mysqli, $query) or die ("Ошибка " . mysqli_error($mysqli));
    }
}
?>

<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">

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
        <div class="container-full">
            <div class="for__home__bread">
                <a class="for__home__bread__img" href="index.php"><img src="img/main/for-home/home.svg" alt=""></a>
                <p class="for__home__bread__text">Контакты</p>
            </div>
        </div>


        <!-- Секция "Контакты" -->
        <section class="contacts" itemscope itemtype="http://schema.org/PostalAddress">
            <div class="container-full">
                <h3 class="main__title blog__title">Контакты</h3>
                <div class="div where__card">
                    <div class="where__card__info">
                        <p class="where__card__text contacts__card__text">
                            <span itemprop="addressLocality">Москва,</span>
                            <span itemprop="streetAddress">ТРК VEGAS Крокус Сити,<br>
                            м. Мякинино, ул. Международная 12,<br>
                            66 км МКАД</span>
                        </p>
                        <p class="where__card__time">Режим работы: 10:00 - 21:00</p>
                        <p class="where__card__tel">+7 (499) 677-56-32 <span style="font-weight: 400;">доб. 1</span></p>
                        <p class="where__card__time contacts__url">info@wellfitness.ru</p>
                        <a href="#" class="nav__btn" onclick="openFeedbackForm()"><img
                                class="btn__img contacts__btn__img" src="img/main/contacts/write.png"
                                alt="write-us">Написать нам</a>
                    </div>
                    <div id="feedbackPopup" class="feedback-popup">
                        <span class="close" onclick="closeFeedbackForm()">&times;</span>
                        <h2 class="feedback-popup__title">Форма обратной связи</h2>
                        <form class="feedback-popup__form" id="feedbackForm" enctype="multipart/form-data"
                            method="post">
                            <input type="text" id="name" name="username" placeholder="Ваше имя" required><br><br>
                            <input type="email" id="email" name="email" placeholder="Email" required><br><br>
                            <textarea id="message" name="text" placeholder="Ваше сообщение" required></textarea><br><br>
                            <button type="submit" name="submit" class="main__btn">Отправить</button>
                        </form>
                    </div>

                    <div id="overlay" class="overlay"></div>
                </div>

                <div style="position:relative;overflow:hidden; margin-bottom: 50px;"><a
                        href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps"
                        style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a
                        href="https://yandex.ru/maps/geo/moskva/53000094/?ll=37.674865%2C55.683529&utm_medium=mapframe&utm_source=maps&z=10.1"
                        style="color:#eee;font-size:12px;position:absolute;top:14px;">Москва — Яндекс Карты</a><iframe
                        src="https://yandex.ru/map-widget/v1/?ll=37.674865%2C55.683529&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1MzAwMDA5NBIa0KDQvtGB0YHQuNGPLCDQnNC-0YHQutCy0LAiCg2GeBZCFQEGX0I%2C&z=10.1"
                        width="1410" height="450" frameborder="1" allowfullscreen="true"
                        style="position:relative;"></iframe>
                </div>
                <hr class="contacts__line">
                <div class="contacts__info row">
                    <div class="contacts__info__title">
                        <h4>Отдел продаж</h4>
                    </div>
                    <div class="where__card__tel contacts__info__tel">
                        <p>+7 (499) 677-56-32 <span style="font-weight: 400;">доб. 1</span></p>
                    </div>
                    <div class="where__card__time contacts__info__url">
                        <p>zakaz@wellfitness.ru</p>
                    </div>
                </div>
                <hr class="contacts__line">
                <div class="contacts__info row">
                    <div class="contacts__info__title">
                        <h4>Отдел бухгалтерии</h4>
                    </div>
                    <div class="where__card__tel contacts__info__tel">
                        <p>+7 (499) 677-56-32 <span style="font-weight: 400;">доб. 3</span></p>
                    </div>
                    <div class="where__card__time contacts__info__url">
                        <p>buh@wellfitness.ru</p>
                    </div>
                </div>
                <hr class="contacts__line">
                <div class="contacts__info row">
                    <div class="contacts__info__title">
                        <h4>Сервисная служба</h4>
                    </div>
                    <div class="where__card__tel contacts__info__tel">
                        <p>+7 (499) 677-56-32 <span style="font-weight: 400;">доб. 2</span></p>
                    </div>
                    <div class="where__card__time contacts__info__url">
                        <p>service@wellfitness.ru</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include_once ('include/footer.php') ?>


    <script src="js/script.js"></script>
</body>

</html>