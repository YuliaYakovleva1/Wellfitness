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
        <div class="container-full">
            <div class="for__home__bread">
                <a class="for__home__bread__img" href="index.php"><img src="img/main/for-home/home.svg" alt="home"></a>
                <p class="for__home__bread__text">Где купить</p>
            </div>
        </div>


        <!-- Секция "Где купить" -->
        <section class="where">
            <div class="container-full">
                <h3 class="main__title blog__title">Где купить</h3>
                <h4 class="where__title">Фирменный магазин Well Fitness</h4>
                <div class="div where__card">
                    <div class="where__card__info">
                        <p class="where__card__text">Москва, ТРК VEGAS Крокус Сити,<br>
                            м. Мякинино, ул. Международная 12,<br>
                            66 км МКАД</p>
                        <p class="where__card__time">10:00 - 21:00</p>
                        <p class="where__card__tel">+7 (499) 677-56-32 <span style="font-weight: 400;">доб. 1</span></p>
                    </div>
                </div>
                <h4 class="where__title">Магазины партнеров</h4>
                <div class="where__cards row">
                    <div class="where__card__partner">
                        <h3 class="where__card__partner__title">Спорт Дома</h3>
                        <p class="where__card__partner__address">м. Мякинино,<br>
                            ул. Международная 12,<br>
                            10:00 - 21:00</p>
                        <p class="where__card__partner__tel">+7 (499) 677-56-32 доб. 1</p>
                    </div>
                    <div class="where__card__partner">
                        <h3 class="where__card__partner__title">Тренмаркет.ру</h3>
                        <p class="where__card__partner__address">Ленинский пр-т, 99 <br>
                            10:00 - 21:00</p>
                        <p class="where__card__partner__url">www.wellgallery.ru</p>
                    </div>
                    <div class="where__card__partner">
                        <h3 class="where__card__partner__title">Goldgum</h3>
                        <p class="where__card__partner__address">Сколковское шоссе, 31, ТЦ <br> "СпортХит"<br>
                            10:00 - 21:00</p>
                        <p class="where__card__partner__tel">+7 (499) 677-56-32 доб. 1</p>
                    </div>
                    <div class="where__card__partner">
                        <h3 class="where__card__partner__title">Sportpremier</h3>
                        <p class="where__card__partner__address"> м. Румянцево, БП "Румянцево", <br> блок Д, 1 этаж <br>
                            10:00 - 21:00</p>
                        <p class="where__card__partner__tel">+7 (499) 677-56-32 доб. 1</p>
                    </div>
                    <div class="where__card__partner">
                        <h3 class="where__card__partner__title">Wellgallery</h3>
                        <p class="where__card__partner__address">Новорижское шоссе, 5 км от <br> МКАД, ТРК "Рига Молл" 3
                            этаж <br>
                            10:00 - 21:00</p>
                        <p class="where__card__partner__url">www.wellgallery.ru</p>
                    </div>
                    <div class="where__card__partner">
                        <h3 class="where__card__partner__title">Wellgallery</h3>
                        <p class="where__card__partner__address">Калужское шоссе, 1 км от МКАД, <br> ТЦ "Славянский
                            Град" 1 этаж <br>
                            10:00 - 21:00</p>
                        <p class="where__card__partner__url">www.wellgallery.ru</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include_once ('include/footer.php') ?>

    <script src="js/script.js"></script>
    <script src="js/tabs2.js"></script>
</body>

</html>