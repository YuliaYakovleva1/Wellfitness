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
                <p class="for__home__bread__text">Тренажеры для дома</p>
            </div>
        </div>

        <!-- Секция "Тренажеры для дома" -->
        <section class="for__home">
            <div class="container-full">
                <h3 class="main__title">Тренажеры для дома</h3>
                <div class="row justify__content__between">
                    <?php
                    $sql = "SELECT * FROM `for-home`";
                    $res = $mysqli->query($sql);

                    if ($res->num_rows > 0) {
                        while ($resArticle = $res->fetch_assoc()) {
                            ?>
                            <div class="col-auto for__home__card">
                                <img class="for__home__img" src="img/main/for-home/<?= $resArticle['image'] ?>" alt="trainer">
                                <ul class="for__home__info">
                                    <h3 class="for__home__title">
                                        <?= $resArticle['title'] ?>
                                    </h3>
                                    <div class="for__home__items row justify__content__between">
                                        <li class="for__home__item"><a href="catalog.php">
                                                <?= $resArticle['link1'] ?>
                                            </a></li>
                                        <span class="for__home__span">
                                            <?= $resArticle['span1'] ?>
                                        </span>
                                    </div>
                                    <img src="img/main/for-home/<?= $resArticle['line1'] ?>" alt="line">
                                    <div class="for__home__items row justify__content__between">
                                        <li class="for__home__item"><a href="catalog.php">
                                                <?= $resArticle['link2'] ?>
                                            </a></li>
                                        <span class="for__home__span">
                                            <?= $resArticle['span2'] ?>
                                        </span>
                                    </div>
                                    <img src="img/main/for-home/<?= $resArticle['line2'] ?>" alt="line">
                                    <div class="for__home__items row justify__content__between">
                                        <li class="for__home__item"><a href="catalog.php">
                                                <?= $resArticle['link3'] ?>
                                            </a></li>
                                        <span class="for__home__span">
                                            <?= $resArticle['span3'] ?>
                                        </span>
                                    </div>
                                    <img src="img/main/for-home/<?= $resArticle['line3'] ?>" alt="">
                                    <div class="for__home__items row justify__content__between">
                                        <li class="for__home__item"><a href="catalog.php">
                                                <?= $resArticle['link4'] ?>
                                            </a></li>
                                        <span class="for__home__span">
                                            <?= $resArticle['span4'] ?>
                                        </span>
                                    </div>
                                    <img src="img/main/for-home/<?= $resArticle['line4'] ?>" alt="">
                                    <div class="for__home__items row justify__content__between">
                                        <li class="for__home__item"><a href="catalog.php">
                                                <?= $resArticle['link5'] ?>
                                            </a></li>
                                        <span class="for__home__span">
                                            <?= $resArticle['span5'] ?>
                                        </span>
                                    </div>
                                    <img src="img/main/for-home/<?= $resArticle['line5'] ?>" alt="">
                                    <div class="for__home__items row justify__content__between">
                                        <li class="for__home__item"><a href="catalog.php">
                                                <?= $resArticle['link6'] ?>
                                            </a></li>
                                        <span class="for__home__span">
                                            <?= $resArticle['span6'] ?>
                                        </span>
                                    </div>
                                    <img src="img/main/for-home/<?= $resArticle['line6'] ?>" alt="">
                                </ul>
                            </div>
                            <?php
                        }
                    } ?>
                </div>
        </section>



        <!-- Секция "Акция" -->
        <?php include_once ('include/promotion.php') ?>

    </main>

    <?php include_once ('include/footer.php') ?>

    <script src="js/script.js"></script>
    <script src="js/tabs.js"></script>
</body>

</html>