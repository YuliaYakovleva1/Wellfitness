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
                <p class="for__home__bread__text">О компании</p>
            </div>
        </div>


        <!-- Секция "О компании" -->
        <section class="about" itemscope itemtype=" http://schema.org/Organization">
            <div class="container-full">
                <h3 class="main__title blog__title">О компании</h3>
                <div class="about__card">
                    <div class="about__text">
                        <p><span style="color: #F53B49;" itemprop="name">Well Fitness</span> — надежный партнер с 2005 года для сотен
                            компаний от Калининграда до Владивостока.</p>
                    </div>
                </div>
                <div class="about__description">
                    <h3 class="about__description__title" itemprop="description">Мы сегодня – это:</h3>
                    <div class="about__description__wrap">
                        <ul class="about__description__text">
                            <li>• слаженная команда людей, любящих спорт и здоровый образ жизни знающих свое дело и
                                ориентирующихся во всех нюансах фитнес оборудования;</li>
                            <li>• широкая номенклатура качественной продукции ведущих мировых брендов с огромным выбором
                                товаров в наличии;</li>
                            <li> • склад запчастей для обеспечения качественного сервиса и бесперебойной работы
                                оборудования;</li>
                            <li> • полный послепродажный сервис с информационной и технической поддержкой;</li>
                            <li>• строгое соблюдение всех обязательств перед партнерами;</li>
                            <li>• отличные цены и эксклюзивные условия для постоянных партнеров.</li>
                        </ul>
                    </div>

                    <h3 class="about__description__title">В чем причина нашего успеха?</h3>
                    <div class="about__description__wrap">
                        <p class="about__description__text">Во-первых, мы особенно дорожим своей безупречной репутацией
                            и регулярно повышаем планку качества сервиса. Зная, насколько хрупким может оказаться
                            доверие покупателя, специалисты Well Fitness всегда ориентируются на интересы клиентов.
                            Во-вторых, мы поставляем только самую качественную и надежную продукцию. Перед выводом на
                            российский рынок, мы тщательно тестируем каждую модель, поэтому все предлагаемое
                            оборудование высоко ценится покупателями и имеет минимум сервисных проблем.</p><br><br>
                        <p class="about__description__text">На сегодняшний день в каталоге Well Fitness представлены
                            лучшие мировые бренды спортивного оборудования, среди которых Sole Fitness, Nautilus
                            Fitness, Bowflex, CardioPower, PROSKI Simulator, Eclipse и др. Продукция этих марок
                            отличается безупречным балансом качества и функциональности, возглавляет ведущие мировых
                            рейтингах и пользуется доверием покупателей по всему миру. Если вы ищете надежного
                            поставщика спортивного оборудования - мы будем рады видеть вас в числе наших партнеров и
                            готовы предложить лучшие условия для выгодного дилерского сотрудничества!</p>
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