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
        <div class="container-full">
            <div class="for__home__bread">
                <a href="catalog.php">
                    <p class="for__home__bread__text">В каталог</p>
                </a>
            </div>
        </div>
        <div class="about">
            <div class="container-full">
                <h3 class="main__title blog__title">Личный кабинет</h3>
            </div>
        </div>

        <hr style="margin-left: 0; width: 100%; margin-bottom: 40px;">
        <section class="lk__blocks row container-full">
            <div class="lk__block__left row">
                <div class="lk__block__right__mobile">
                    <?php include ('include/about.php'); ?>
                </div>
                <a href="where.php">
                    <div class="lk__card">
                        <h4 class="lk__card__title">Ближайшая доставка</h4>
                        <p class="lk__card__subtitle">Самовывоз</p>
                        <p class="lk__card__date">14 июля с 10:00-12:00</p>
                        <p class="lk__card__link">Подробнее</p>
                    </div>
                </a>
                <a href="cart.php">
                    <div class="lk__card">
                        <h4 class="lk__card__title">Заказы</h4>
                        <p class="lk__card__subtitle">№ 1521751218 от 26.03.2021</p>
                        <p class="lk__card__date">Оплачен. Заказ выполнен</p>
                        <p class="lk__card__link">Все заказы</p>
                    </div>
                </a>
                <a href="cart.php">
                    <div class="lk__card">
                        <h4 class="lk__card__title">Ваша скидка</h4>
                        <p class="lk__card__subtitle" style="font-weight: 700;">15%</p>
                        <p class="lk__card__date">Сумма выкупа 1 785 000 ₽</p>
                        <p class="lk__card__link">Подробнее</p>
                    </div>
                </a>
                <a href="cart.php">
                    <div class="lk__card">
                        <h4 class="lk__card__title">Баланс Бонусных рублей</h4>
                        <p class="lk__card__subtitle" style="font-weight: 700;">2000</p>
                        <p class="lk__card__date">доступно для оплаты</p>
                        <p class="lk__card__link">Подробнее</p>
                    </div>
                </a>
                <a href="service.php">
                    <div class="lk__card">
                        <h4 class="lk__card__title">Инструкции</h4>
                        <p class="lk__card__subtitle" style="margin-bottom: 28px;">Инструкции по сборке и использованию
                            приобретенных товаров</p>
                        <p class="lk__card__link">Подробнее</p>
                    </div>
                </a>
                <a href="#">
                    <div class="lk__card" onclick="openFeedbackForm()">
                        <h4 class="lk__card__title">Ваши обращения</h4>
                        <p class="lk__card__subtitle" style="margin-bottom: 28px;">Оставьте свое обращение, если у вас
                            возникнут вопросы по работе интернет-магазина</p>
                        <p class="lk__card__link">Написать</p>
                    </div>
                </a>
                <div id="feedbackPopup" class="feedback-popup">
                    <span class="close" onclick="closeFeedbackForm()">&times;</span>
                    <h2 class="feedback-popup__title">Форма обратной связи</h2>
                    <form class="feedback-popup__form" id="feedbackForm" enctype="multipart/form-data" method="post">
                        <input type="text" id="name" name="username" placeholder="Ваше имя" required><br><br>
                        <input type="email" id="email" name="email" placeholder="Email" required><br><br>
                        <textarea id="message" name="text" placeholder="Ваше сообщение" required></textarea><br><br>
                        <button type="submit" name="submit" class="main__btn">Отправить</button>
                    </form>
                </div>
            </div>

            <div id="lk__user" class="lk__block__right">
                <?php include ('include/about.php'); ?>
            </div>
        </section>
    </main>


    <?php include_once ('include/footer.php') ?>

    <script src="js/script.js"></script>
</body>

</html>