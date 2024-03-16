<?php
session_start();
include ('include/db_connect.php');
$user = isset ($_SESSION['user']['id']);
?>

<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/media.css">

    <title>WellFitness - Магазин спортивного оборудования в Москве</title>
    <meta name="description"
        content="Мы предлагаем широкий ассортимент качественного спортивного инвентаря для занятий фитнесом, кроссфитом, аэробикой, а также для домашних тренировок. У нас вы найдете все необходимое для достижения ваших спортивных целей: от гантелей и гири до тренажеров и аксессуаров. Посетите наш магазин и дайте вашему тренировочному процессу новый импульс с нашим спортивным оборудованием в Москве.">
    <meta name="keywords" content="спортивные товары в Москве, спортивное оборудование, тренажеры для дома">

    <meta property="og:title" content="WellFitness - Магазин спортивного оборудования в Москве" />
    <meta property="og:description"
        content="Мы предлагаем широкий ассортимент качественного спортивного инвентаря для занятий фитнесом, кроссфитом, аэробикой, а также для домашних тренировок. У нас вы найдете все необходимое для достижения ваших спортивных целей: от гантелей и гири до тренажеров и аксессуаров. Посетите наш магазин и дайте вашему тренировочному процессу новый импульс с нашим спортивным оборудованием в Москве." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://twiggit.ru/image/cache/imgx/Begovaya-dorozhka-Ammity-Fashion-FTM-5120-600x600.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Ваш путь к здоровью и отличной форме начинается здесь! Наш магазин предлагает широкий ассортимент качественного спортивного оборудования для всех видов тренировок. Независимо от того, являетесь ли вы профессиональным спортсменом, начинающим фитнес-энтузиастом или просто хотите поддерживать активный образ жизни — у нас есть все необходимое для ваших целей." />
    <meta property="og:url" content="https://wellfitness.index.php" />
</head>

<body>

    <?php include_once ('include/header.php') ?>

    <main>
        <!-- Слайдер "Бег с нулевой ударной нагрузкой на суставы" -->
        <section class="slider__container">
            <div class="slider">
                <div class="slider__slide">
                    <div class="slider__text">
                        <span class="slider__span">Zero Runner</span>
                        <h2 class="slider__title">Бег с нулевой ударной нагрузкой <br> <span
                                style="font-weight: 400;">на
                                суставы</span></h2>
                        <a href="catalog.php"><button class="main__btn">Узнать больше</button></a>
                    </div>
                </div>

                <div class="slider__slide">
                    <div class="slider__text">
                        <span class="slider__span">Zero Runner</span>
                        <h2 class="slider__title">Бег с нулевой ударной нагрузкой <br> <span
                                style="font-weight: 400;">на
                                суставы</span></h2>
                        <a href="catalog.php"><button class="main__btn">Узнать больше</button></a>
                    </div>
                </div>
                <div class="slider__slide">
                    <div class="slider__text">
                        <span class="slider__span">Zero Runner</span>
                        <h2 class="slider__title">Бег с нулевой ударной нагрузкой <br> <span
                                style="font-weight: 400;">на
                                суставы</span></h2>
                        <a href="catalog.php"><button class="main__btn">Узнать больше</button></a>
                    </div>
                </div>
            </div>

            <button class="prev-button" type="button" aria-label="Посмотреть предыдущий слайд"><img
                    src="img/main/slider/arrow-left.svg" alt="arrow"></button>
            <button class="next-button" type="button" aria-label="Посмотреть следующий слайд"><img
                    src="img/main/slider/arrow-right.svg" alt="arrow"></button>
        </section>

        <!-- Секция "Тренажеры для дома" -->
        <section class="goods">
            <div class="container-full">
                <h3 class="main__title">Тренажеры для дома</h3>
                <div class="row justify__content__between mb-30">
                    <div class="col-auto home__card background-images bg-img1">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Беговые <br> дорожки</h4>
                        </a>
                    </div>
                    <div class="col-auto home__card background-images bg-img2">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Эллиптические тренажеры</h4>
                        </a>
                    </div>
                    <div class="col-auto">
                        <div class="home__card background-images-mini bg-img3 mb-30">
                            <div class="home__img__block">
                            </div>
                            <a href="catalog.php">
                                <h4 class="home__img__title">Велотренажеры</h4>
                            </a>
                        </div>
                        <div class="home__card background-images-mini bg-img4">
                            <div class="home__img__block">
                            </div>
                            <a href="catalog.php">
                                <h4 class="home__img__title">Силовые <br> тренажеры</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="home__card background-images-mini background-images-mini-mr-0 bg-img5 mb-30 mr-0">
                            <div class="home__img__block">
                            </div>
                            <a href="catalog.php">
                                <h4 class="home__img__title">Горнолыжные <br> тренажеры</h4>
                            </a>
                        </div>
                        <div class="home__card background-images-mini bg-img6">
                            <div class="home__img__block">
                            </div>
                            <a href="catalog.php">
                                <h4 class="home__img__title">Гребные <br> тренажеры</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row justify__content__between mb-30">
                    <div class="col-auto home__card background-images-midi bg-img7 mb-30">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Батуты</h4>
                        </a>
                    </div>
                    <div class="col-auto home__card background-images-midi bg-img8 mr-0">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Игровые <br> столы</h4>
                        </a>
                    </div>
                    <div class="col-auto home__card background-images-midi bg-img9">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Массажные <br> кресла</h4>
                        </a>
                    </div>
                    <div class="col-auto home__card background-images-midi bg-img10">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Фитнес <br> аксессуары</h4>
                        </a>
                    </div>
                </div>
                <a href="for_home.php"><button class="main__btn">Все категории</button></a>

            </div>
        </section>

        <!-- Секция "Для фитнес клубов" -->
        <section class="goods">
            <div class="container-full">
                <h3 class="main__title">Для фитнес клубов</h3>

                <div class="row justify__content__between mb-30">
                    <div class="col-auto home__card card-left background-images-midi-left bg-img11 mr-0">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Профессиональные кардиотренажеры</h4>
                        </a>
                    </div>
                    <div class="col-auto home__card background-images-midi bg-img12">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Грузоблочные тренажеры</h4>
                        </a>
                    </div>
                    <div class="col-auto home__card background-images-midi bg-img13">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Тренажеры на свободных <br> весах</h4>
                        </a>
                    </div>
                </div>

                <div class="row justify__content__between mb-30">
                    <div class="col-auto home__card background-images-midi bg-img14 mb-30">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Функциональный тренинг</h4>
                        </a>
                    </div>
                    <div class="col-auto home__card background-images-midi bg-img15 mr-0">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Wellness, <br> СПА, Массаж </h4>
                        </a>
                    </div>
                    <div class="col-auto home__card background-images-midi bg-img16">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Спортивная медицина и реабилитация</h4>
                        </a>
                    </div>
                    <div class="col-auto home__card background-images-midi bg-img17">
                        <div class="home__img__block">
                        </div>
                        <a href="catalog.php">
                            <h4 class="home__img__title">Свободные <br> веса</h4>
                        </a>
                    </div>
                </div>

                <a href="for_fitness.php"><button class="main__btn">Все категории</button></a>
            </div>
        </section>

        <!-- Секция "Акция" -->
        <?php include_once ('include/promotion.php') ?>

        <!-- Секция Новости -->
        <?php include_once ('include/news.php') ?>

    </main>

    <?php include_once ('include/footer.php') ?>


    <script src="js/script.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/tabs.js"></script>
</body>

</html>