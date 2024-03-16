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
                <p class="for__home__bread__text">Сервис</p>
            </div>
        </div>


        <!-- Секция "Сервис" -->
        <section class="tabs">
            <div class="container-full">
                <h3 class="main__title catalog__title">Видео-инструкции</h3>
                <div class="tabs__nav row">
                    <button class="tabs__nav-btn2 active" type="button" data-tab="#tab_1">Беговые дорожки</button>
                    <button class="tabs__nav-btn2" type="button" data-tab="#tab_2">Эллиптические</button>
                    <button class="tabs__nav-btn2" type="button" data-tab="#tab_3">Велотренажеры</button>
                    <button class="tabs__nav-btn2" type="button" data-tab="#tab_4">Степперы</button>
                    <button class="tabs__nav-btn2" type="button" data-tab="#tab_5">Гребные тренажеры</button>
                </div>
                <div class="tabs__content2">
                    <div class="tabs__item tabs__content__main active" id="tab_1">
                        <div class="news__cards row justify__content__between">
                            <?php
                            $sql = "SELECT * FROM `service`";
                            $res = $mysqli->query($sql);

                            if ($res->num_rows > 0) {
                                while ($resArticle = $res->fetch_assoc()) {
                                    ?>
                                    <a href="https://www.youtube.com/watch?v=pZYxPhBo2bE" target="_blank"
                                        class="news_card2 service__card">
                                        <div class="service__img">
                                            <img class="news__img" src="img/main/blog/<?= $resArticle['image'] ?>" alt="news">
                                        </div>
                                        <div class="card__info">
                                            <h3 class="news__title service__title">
                                                <?= $resArticle['title'] ?>
                                            </h3>
                                            <p class="news__text service__text">
                                                <?= $resArticle['text'] ?>
                                            </p>
                                        </div>
                                    </a>
                                    <?php
                                }
                            } ?>
                        </div>
                    </div>
                </div>

                <div class="tabs__item" id="tab_2">
                    <p style="margin-bottom: 500px">Эллиптические</p>
                </div>
                <div class="tabs__item" id="tab_3">
                    <p style="margin-bottom: 500px">Велотренажеры</p>
                </div>
                <div class="tabs__item" id="tab_4">
                    <p style="margin-bottom: 500px">Степперы</p>
                </div>
                <div class="tabs__item" id="tab_5">
                    <p style="margin-bottom: 500px">Гребные тренажеры</p>
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