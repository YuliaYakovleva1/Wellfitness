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

    <main class="product__main">
        <div class="container-full">
            <div class="for__home__bread">
                <a class="for__home__bread__img" href="index.php"><img src="img/main/for-home/home.svg" alt="home"></a>
                <a href="catalog.php">
                    <p class="for__home__bread__text">Беговые дорожки</p>
                </a>
                <span>»</span>
                <span class="for__home__bread__text">Беговая дорожка Bowflex BXT128</span>
            </div>
        </div>

        <!-- Секция Товар -->
        <section class="product">
            <div class="container-full">
                <?php
                $sql = "SELECT * FROM `bowflex`";
                $res = $mysqli->query($sql);

                if ($res->num_rows > 0) {
                    while ($resArticle = $res->fetch_assoc()) {
                        ?>
                        <h3 class="main__title blog__title">
                            <?= $resArticle['title'] ?>
                        </h3>
                        <hr style="width: 100%; margin-left: 0;">
                        <div class="product__card row">
                            <div class="product__img">
                                <img src="img/main/product/<?= $resArticle['image'] ?>" alt="product">
                            </div>
                            <section class="product__brand">
                                <img src="img/main/product/brand.png" alt="brand">
                                <hr style="margin-left: 0; margin-top: 48px; width: 224%;">
                                <div class="product__icons2 row">
                                    <div class="sale__icon2 product__icon2">
                                        <a href="include/add_to_favorites2.php?id=<?= $resArticle['id'] ?>"
                                            ><svg width="21" height="17"
                                                viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18.757 1.66341C16.5388 -0.55417 12.9303 -0.55417 10.7127 1.66341L10.1976 2.17818L9.68282 1.66341C7.46524 -0.55447 3.85642 -0.55447 1.63884 1.66341C-0.533711 3.83597 -0.547819 7.2797 1.60613 9.67407C3.57067 11.8571 9.36465 16.5735 9.61049 16.7731C9.77737 16.9088 9.97818 16.9749 10.1778 16.9749C10.1844 16.9749 10.191 16.9749 10.1973 16.9746C10.4038 16.9842 10.6118 16.9133 10.7841 16.7731C11.0299 16.5735 16.8245 11.8571 18.7897 9.67377C20.9433 7.2797 20.9292 3.83597 18.757 1.66341ZM17.451 8.46923C15.9192 10.1708 11.7089 13.6803 10.1973 14.9257C8.68569 13.6806 4.47625 10.1714 2.94484 8.46953C1.44224 6.79944 1.42813 4.42098 2.91212 2.93699C3.67002 2.17938 4.66535 1.80028 5.66068 1.80028C6.65601 1.80028 7.65134 2.17908 8.40925 2.93699L9.54145 4.06919C9.67622 4.20396 9.84611 4.2844 10.0244 4.31262C10.3138 4.37475 10.6277 4.29401 10.8528 4.06949L11.9856 2.93699C13.5018 1.42148 15.9679 1.42178 17.4831 2.93699C18.9671 4.42098 18.953 6.79944 17.451 8.46923Z"
                                                    fill="#858FA4" />
                                            </svg></a>
                                    </div>
                                    <p class="product__icons2__text">В избранное</p>
                                </div>
                                <div class="product__chars">
                                    <p class="product__char"><span class="product__char__span">Тип дорожки: </span>Домашняя</p>
                                    <p class="product__char"><span class="product__char__span">Мощность двигателя: </span>2,0
                                        л.с.</p>
                                    <p class="product__char"><span class="product__char__span">Тип двигателя: </span>DC</p>
                                    <p class="product__char"><span class="product__char__span">Регулировка скорости:
                                        </span>0,8-14 км/ч</p>
                                    <p class="product__char"><span class="product__char__span">Беговое полотно: </span>2-х
                                        слойное</p>
                                    <p class="product__char"><span class="product__char__span">Беговое полотно (ДхШ):
                                        </span>1200 х 450 мм</p>
                                    <p class="product__char"><span class="product__char__span">Аудиосистема MP3: </span>Есть</p>
                                    <p class="product__char"><span class="product__char__span">Консоль: </span>LCD 7 дюймовый
                                        дисплей</p><br>
                                    <a href="#" class="all__chars">Все характеристики</a>
                                </div>
                            </section>
                            <section class="product__icons row">
                                <div class="product__icon">
                                    <img class="product__icon__img" src="img/main/product/icon1.png" alt="icon">
                                    <h4 class="product__icon__text">ВЫГОДНО</h4>
                                </div>
                                <div class="product__icon">
                                    <img class="product__icon__img" src="img/main/product/icon2.png" alt="icon">
                                    <h4 class="product__icon__text">РЕКОМЕНДУЕМ</h4>
                                </div>
                                <div class="product__icon">
                                    <img class="product__icon__img" src="img/main/product/icon3.png" alt="icon">
                                    <h4 class="product__icon__text">НОВИНКА</h4>
                                </div>
                                <div class="product__info2">
                                    <div class="sale__info product__info2__block">
                                        <p class="sale__stock">В наличии</p>
                                        <img class="sale__stock__img" src="img/main/sale/in-stock.png" alt="in stock">
                                        <span class="sale__showroom">Есть в шоу-руме</span>
                                    </div>
                                    <div class="product__price">
                                        <h3 class="product__price__current">
                                            <?= $resArticle['current_price'] ?> ₽<span class="product__price__old">
                                                <?= $resArticle['old_price'] ?> ₽
                                            </span>
                                        </h3>
                                    </div>
                                    <div class="product__diller">
                                        <p class="product__diller__price">1 354 900 ₽<span
                                                class="product__diller__price__span">Цена для дилера</span></p>
                                    </div>
                                    <div class="product__bonus">
                                        <p class="product__bonus__sum">+ 600<span class="product__bonus__sum__span">Бонусных
                                                рублей</span></p>
                                    </div>
                                    <a href="include/add_to_cart2.php?id=<?= $resArticle['id'] ?>"><button
                                            class="sale__btn product__btn">В корзину</button></a>
                                    <div class="product__payment">
                                        <p class="product__payment__text">Купить в рассрочку от 16 658 ₽ /мес</p>
                                    </div>
                                </div>
                            </section>

                        </div>
                        <?php
                    }
                } ?>

                <section class="product__config__wrap row">
                    <div class="product__config">
                        <h3 class="product__config__title">Конфигурация</h3>
                        <div class="product__config__block row">
                            <span class="product__config__span">Размер, см</span>
                            <div class="product__config__values row">
                                <p class="cart__card__char__value product__config__value">1500 × 2000</p>
                                <p class="cart__card__char__value product__config__value">1700 × 2000</p>
                                <p class="cart__card__char__value product__config__value">1900 × 2000<span
                                        class="product__value__span">+5000 ₽</span></p>
                                <p class="cart__card__char__value product__config__value">1700 × 2000<span
                                        class="product__value__span">+5000 ₽</span></p>
                                <p class="cart__card__char__value product__config__value">1900 × 2000<span
                                        class="product__value__span">+5000 ₽</span></p>
                            </div>
                        </div>
                        <hr style="margin-bottom: 18px; width: 100%; margin-left: 0;">
                        <div class="product__config__block row">
                            <span class="product__config__span">Вес стека, г</span>
                            <div class="product__config__values row">
                                <p class="cart__card__char__value product__config__value">150</p>
                                <p class="cart__card__char__value product__config__value">500</p>
                                <p class="cart__card__char__value product__config__value">800<span
                                        class="product__value__span">+500 ₽</span></p>
                            </div>
                        </div>
                        <hr style="margin-bottom: 18px; width: 100%; margin-left: 0;">
                        <div class="product__config__block row">
                            <span class="product__config__span">Цвет</span>
                            <div class="product__config__values row">
                                <p id="black" class="cart__card__char__value product__config__value product__color">
                                    Черный</p>
                                <p id="graphite" class="cart__card__char__value product__config__value product__color">
                                    Графит</p>
                                <p id="white" class="cart__card__char__value product__config__value product__color">
                                    Белый</p>
                                <p id="red" class="cart__card__char__value product__config__value product__color">
                                    Красный<span class="product__value__span">+500 ₽</span></p>
                                <p id="white" class="cart__card__char__value product__config__value product__color">
                                    Белый<span class="product__value__span">+500 ₽</span></p>
                                <p id="red" class="cart__card__char__value product__config__value product__color">
                                    Красный<span class="product__value__span">+500 ₽</span></p>
                            </div>
                        </div>
                        <hr style="margin-bottom: 18px; width: 100%; margin-left: 0;">
                        <div class="product__config__block row">
                            <span class="product__config__span">Цвет</span>
                            <div class="product__config__values row">
                                <p id="black" class="cart__card__char__value product__config__value product__color">
                                    Черный</p>
                                <p id="graphite" class="cart__card__char__value product__config__value product__color">
                                    Графит</p>
                                <p id="white" class="cart__card__char__value product__config__value product__color">
                                    Белый</p>
                                <p id="red" class="cart__card__char__value product__config__value product__color">
                                    Красный<span class="product__value__span">+500 ₽</span></p>
                            </div>
                        </div>
                        <hr style="margin-bottom: 18px; width: 100%; margin-left: 0;">
                        <div class="product__config__block row">
                            <span class="product__config__span">Цвет</span>
                            <div class="product__config__values row">
                                <p id="black" class="cart__card__char__value product__config__value product__color">
                                    Черный</p>
                                <p id="graphite" class="cart__card__char__value product__config__value product__color">
                                    Графит</p>
                                <p id="white" class="cart__card__char__value product__config__value product__color">
                                    Белый</p>
                                <p id="red" class="cart__card__char__value product__config__value product__color">
                                    Красный<span class="product__value__span">+500 ₽</span></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section style="background: rgb(247, 247, 247);">
            <div class="container-full">
                <div class="about__card product__treadmill__card">
                    <div class="about__text">
                        <p class="product__treadmill__card__text">Беговые дорожки Bowflex Results Series ™ это самые
                            совершенные технологии, высочайшее качество и полноценная синхронизация данных.</p>
                    </div>
                    <div class="product__treadmill__card__video row">
                        <a href="service.php"><img src="img/main/product/play.png" alt="play"
                                class="product__treadmill__card__img"></a>
                        <a href="service.php" class="product__treadmill__card__link">Видео о товаре</a>
                    </div>
                </div>
                <section class="product__description">
                    <div class="product__description__block1 row">
                        <img src="img/main/product/product2.png" alt="product-image">
                        <div class="product__description__block1__info">
                            <h4 class="product__description__block1__info__title">Заголовок</h4>
                            <p class="product__description__block1__info__text">Беговая дорожка Bowlfex BXT128 – это
                                одна из самых технологичных моделей для максимально эффективных и комфортных тренировок.
                                <br><br>

                                Надежный двигатель мощностью 3.5 л.с. раскручивает полотно до 19.3 км/ч, а максимальный
                                угол наклона в 15% позволяет разнообразить тренировки и имитировать условия
                                интенсивногоподъема для любителей бега по пересеченной местности.
                                <br><br>

                                Беговая дорожка Bowlfex BXT128 оснащена высокопрочным 3-х слойным полотном
                                размером51x152 см и инновационной системой амортизации Comfort Tech 3 Теперь каждый шаг
                                идеально сглаживается, создавая ощущения пробежки на профессиональном покрытии!
                            </p>

                        </div>
                    </div>
                    <div class="product__description__block2 row">
                        <div class="product__description__block2__info">
                            <h4 class="product__description__block1__info__title">Заголовок</h4>
                            <p class="product__description__block1__info__text">На поручнях с мягким полиуретановым
                                покрытием размещены кнопки регулировки наклона и скорости. Менять тренировочные режимы
                                стало еще проще и удобнее!
                                <br><br>
                                Вся информация о тренировке выводится на 7,5-дюймовую LCD консоль. На панели
                                отображается не только общее количество сжигаемых калорий, но и сожженные калории за
                                последнюю минуту. Это одно из главных преимуществ модели BXT128 и отличная мотивация для
                                еще более эффективной работы на кардио тренировках!
                            </p>

                        </div>
                        <img src="img/main/product/product3.png" alt="product-image">
                    </div>
                </section>
            </div>
        </section>


        <!-- Секция "Акция" -->
        <section class="tabs" style="background: rgb(247, 247, 247);">
            <div class="container-full">
                <div class="tabs__nav">
                    <button class="tabs__nav-btn active" type="button" data-tab="#tab_1">Акция</button>
                    <button class="tabs__nav-btn" type="button" data-tab="#tab_2">Новинки</button>
                    <button class="tabs__nav-btn display7" type="button" data-tab="#tab_3">Мы рекомендуем</button>
                </div>
                <div class="tabs__content">
                    <div class="tabs__item active" id="tab_1">
                        <div class="sale row justify__content__between">
                            <?php
                            $sql = "SELECT * FROM `promotion`";
                            $res = $mysqli->query($sql);

                            if ($res->num_rows > 0) {
                                while ($resArticle = $res->fetch_assoc()) {
                                    ?>
                                    <div class="sale__card">
                                        <div class="sale__img row justify__content__between">

                                            <div class="sale_icons">
                                                <img class="sale__icon" src="img/main/sale/icon1.svg" alt="icon1">
                                                <img class="sale__icon" src="img/main/sale/icon2.svg" alt="icon2">
                                                <img class="sale__icon" src="img/main/sale/icon3.svg" alt="icon3">
                                            </div>
                                            <div class="sale__icons2">
                                                <div class="sale__icon2">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="7" width="2" height="10" rx="1" fill="#858FA4" />
                                                        <rect x="5" width="2" height="17" rx="1" fill="#858FA4" />
                                                        <rect x="10" y="7" width="2" height="10" rx="1" fill="#858FA4" />
                                                        <rect x="15" y="4" width="2" height="13" rx="1" fill="#858FA4" />
                                                    </svg>
                                                </div>
                                                <div class="sale__icon2">
                                                    <a href="include/add_to_favorites.php?id=<?= $resArticle['id'] ?>"
                                                        onclick="changeHeartColor(this.querySelector('svg'))"><svg width="21"
                                                            height="17" viewBox="0 0 21 17" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M18.757 1.66341C16.5388 -0.55417 12.9303 -0.55417 10.7127 1.66341L10.1976 2.17818L9.68282 1.66341C7.46524 -0.55447 3.85642 -0.55447 1.63884 1.66341C-0.533711 3.83597 -0.547819 7.2797 1.60613 9.67407C3.57067 11.8571 9.36465 16.5735 9.61049 16.7731C9.77737 16.9088 9.97818 16.9749 10.1778 16.9749C10.1844 16.9749 10.191 16.9749 10.1973 16.9746C10.4038 16.9842 10.6118 16.9133 10.7841 16.7731C11.0299 16.5735 16.8245 11.8571 18.7897 9.67377C20.9433 7.2797 20.9292 3.83597 18.757 1.66341ZM17.451 8.46923C15.9192 10.1708 11.7089 13.6803 10.1973 14.9257C8.68569 13.6806 4.47625 10.1714 2.94484 8.46953C1.44224 6.79944 1.42813 4.42098 2.91212 2.93699C3.67002 2.17938 4.66535 1.80028 5.66068 1.80028C6.65601 1.80028 7.65134 2.17908 8.40925 2.93699L9.54145 4.06919C9.67622 4.20396 9.84611 4.2844 10.0244 4.31262C10.3138 4.37475 10.6277 4.29401 10.8528 4.06949L11.9856 2.93699C13.5018 1.42148 15.9679 1.42178 17.4831 2.93699C18.9671 4.42098 18.953 6.79944 17.451 8.46923Z"
                                                                fill="#858FA4" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                            <div class="sale__img__image">
                                                <a href="catalog.php"><img src="img/main/sale/<?= $resArticle['image'] ?>"
                                                        alt="threadmill"></a>
                                            </div>
                                        </div>
                                        <div class="sale__text">
                                            <div class="sale__info">
                                                <p class="sale__stock">В наличии</p>
                                                <img class="sale__stock__img" src="img/main/sale/in-stock.png" alt="in stock">
                                                <span class="sale__showroom">Есть в шоу-руме</span>
                                            </div>
                                            <a href="product.php">
                                                <h3 class="sale__title">
                                                    <?= $resArticle['title'] ?>
                                                </h3>
                                            </a>
                                            <div class="sale__rating">
                                                <span class="sale__rating__text">Рейтинг</span>
                                                <img src="img/main/sale/stars.png" alt="stars" class="sale__rating__img">
                                            </div>

                                            <div class="sale__purchase row justify__content__between">
                                                <div class="sale__price">
                                                    <h3 class="sale__current_price">
                                                        <?= $resArticle['current_price'] ?> ₽
                                                    </h3>
                                                    <h3 class="sale__old__price">
                                                        <?= $resArticle['old_price'] ?> ₽
                                                    </h3>
                                                </div>
                                                <a href="include/add_to_cart.php?id=<?= $resArticle['id'] ?>"><button
                                                        class="sale__btn ml-20">Купить</button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } ?>
                        </div>
                    </div>
                    <div class="tabs__item" id="tab_2">
                        <p style="margin-bottom: 500px">Новинки</p>
                    </div>
                    <div class="tabs__item" id="tab_3">
                        <p style="margin-bottom: 500px">Мы рекомендуем</p>
                    </div>
                </div>
                <a href="catalog.php"><button class="main__btn">Все товары по акции</button></a>
            </div>
        </section>

    </main>

    <?php include_once ('include/footer.php') ?>

    <script src="js/script.js"></script>
    <script src="js/tabs.js"></script>
</body>

</html>