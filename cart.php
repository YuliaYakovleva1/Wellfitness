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
                <p class="for__home__bread__text">Моя корзина</p>
            </div>
        </div>

        <!-- Секция "Моя корзина" -->
        <section class="for__home cart">
            <div class="container-full">
                <h3 class="main__title">Моя корзина</h3>
                <?php
                if (isset ($_SESSION['user'])) {
                    // Получаем ID пользователя из сессии
                    $user_id = $_SESSION['user']['id'];

                    // Запрос к базе данных для получения данных пользователя
                    $sql = "SELECT * FROM `product` WHERE `user_id`='$user_id'";
                    $res = $mysqli->query($sql);

                    // Проверяем, есть ли результаты запроса
                    if ($res->num_rows > 0) {
                        while ($resArticle = $res->fetch_assoc()) {
                            ?>
                            <div class="cart__card">
                                <div class="cart__card__img">
                                    <img src="img/main/cart/<?= $resArticle['image'] ?>" alt="cart-image">
                                </div>
                                <div class="card__info__wrap">
                                    <div class="cart__card__info" style="width: 320px;">
                                        <a href="product.php">
                                            <h3 class="cart__card__title sale__title">
                                                <?= $resArticle['title'] ?>
                                            </h3>
                                        </a>
                                        <div class="sale__rating">
                                            <span class="sale__rating__text">Рейтинг</span>
                                            <img src="img/main/sale/stars.png" alt="stars" class="sale__rating__img">
                                        </div>
                                        <div class="sale__info">
                                            <p class="sale__stock">В наличии</p>
                                            <img class="sale__stock__img" src="img/main/sale/in-stock2.png" alt="in stock">
                                            <span class="sale__showroom">Есть в шоу-руме</span>
                                        </div>
                                    </div>
                                    <div class="cart__card__price">
                                        <h3 class="cart__card__price__value">
                                            <?= $resArticle['current_price'] ?> ₽
                                        </h3>
                                        <p class="cart__card__price__old">
                                            <?= $resArticle['old_price'] ?>
                                        </p>
                                    </div>
                                    <hr>
                                    <div class="cart__card_char row justify__content__between">
                                        <div class="col-auto">
                                            <p class="cart__card__char__title">Цвет</p>
                                            <p id="color" class="cart__card__char__value">Черный</p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="cart__card__char__title">Размер, см</p>
                                            <p class="cart__card__char__value">1500 * 2000</p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="cart__card__char__title">Вес стека, г</p>
                                            <p id="weight" class="cart__card__char__value">150</p>
                                        </div>
                                    </div>
                                    <div class="delete__item">
                                        <span class="delete__text">Удалить</span>
                                        <a href="admin/delete/product.php?id=<?= $resArticle['id'] ?>"><img class="delete__icon"
                                                src="img/main/cart/delete.png" alt="delete"></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                }
                ?>


                <!-- Блок Итого -->
                <section class="purchase">
                    <div class="purchase__block">
                        <div class="purchase__sum row">
                            <h3 class="purchase__sum__text">Итого</h3>
                            <h3 class="purchase__sum__amount">200 900 ₽</h3>
                            <hr style="margin-left: 0; width: 100%;">
                        </div>
                        <div class="purchase__goods">
                            <div class="purchase__goods__line row">
                                <p class="purchase__goods__text">Товары, 3 шт.</p>
                                <p class="purchase__goods__amount">220 900 ₽</p>
                            </div>
                            <div class="purchase__goods__line row">
                                <p class="purchase__goods__text">Скидка</p>
                                <p class="purchase__goods__discount">0 ₽</p>
                            </div>
                            <hr style="margin-left: 0; width: 100%;">
                        </div>

                        <a href="lk.php" class="nav__btn">Перейти к оформлению</a>
                    </div>
                </section>
            </div>
        </section>


        <?php
        $sql = "SELECT title, current_price, old_price FROM product WHERE `user_id`='$user'";
        $result = $mysqli->query($sql);

        $totalPrice = 0;
        $totalItems = 0;
        $discount = 0;

        if ($result->num_rows > 0) {
            // вывод данных каждого товара
            while ($row = $result->fetch_assoc()) {
                // Вычисляем скидку
                $discount += $row["old_price"] - $row["current_price"];
                // Рассчитываем общую стоимость и количество товаров в корзине
                $totalPrice += $row["old_price"];
                $totalItems++;
            }
        } else {
            // Вывод сообщения о пустой корзине
            echo "<p style='color: #384255; font-size: 18px; font-weight: 600; margin-bottom: 250px;' class='container-full empty-cart-message'>В Вашей корзине нет товаров.</p>";
        }


        // Обновление значения итоговой суммы и количества товаров в корзине на странице
        echo "<script>
    document.querySelector('.purchase__goods__text').innerText = 'Товары, $totalItems шт.';
    document.querySelector('.purchase__goods__amount').innerText = '$totalPrice ₽';
    document.querySelector('.purchase__sum__amount').innerText = '$totalPrice ₽';
    document.querySelector('.purchase__goods__discount').innerText = '$discount ₽'; // Отображаем сумму скидки
    document.querySelector('.purchase__sum__amount').innerText = '" . ($totalPrice - $discount) . " ₽'; // Учитываем скидку
    </script>";
        ?>
    </main>


    <?php include_once ('include/footer.php') ?>

    <script src="js/script.js"></script>
    <script src="js/tabs.js"></script>
</body>

</html>