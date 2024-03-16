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
                <a class="for__home__bread__img" href="index.php"><img src="img/main/for-home/home.svg" alt=""></a>
                <p class="for__home__bread__text">Блог</p>
            </div>
        </div>

        <!-- Секция Новости -->
        <section class="news">
            <div class="container-full">
                <h3 class="main__title blog__title">Блог</h3>
                <div class="news__cards row justify__content__between">
                    <?php
                    $sql = "SELECT * FROM `blog`";
                    $res = $mysqli->query($sql);

                    if ($res->num_rows > 0) {
                        while ($resArticle = $res->fetch_assoc()) {
                            ?>
                            <a href="article.php" class="news_card2 news__card__960">
                                <img class="news__img" src="img/main/blog/<?= $resArticle['image'] ?>" alt="news">
                                <div class="card__info">
                                    <h3 class="news__title">
                                        <?= $resArticle['title'] ?>
                                    </h3>
                                    <p class="news__text">
                                        <?= $resArticle['text'] ?>
                                    </p>
                                    <span class="news__date">
                                        <?= $resArticle['date'] ?>
                                    </span>
                                </div>
                            </a>
                            <?php
                        }
                    } ?>
                </div>
            </div>
        </section>


    </main>


    <?php include_once ('include/footer.php') ?>

    <script src="js/script.js"></script>
    <script src="js/tabs2.js"></script>
</body>

</html>