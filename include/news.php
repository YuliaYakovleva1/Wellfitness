<!-- Секция Новости -->
<section class="news">
    <div class="container-full">
        <h3 class="main__title">Новости</h3>
        <div class="news__cards row justify__content__between">
            <?php
            $sql = "SELECT * FROM `news`";
            $res = $mysqli->query($sql);

            if ($res->num_rows > 0) {
                while ($resArticle = $res->fetch_assoc()) {
                    ?>
                    <a href="article.php" class="news_card">
                        <img class="news__img" src="img/main/news/<?= $resArticle['image'] ?>" alt="news">
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
        <a href="blog.php"><button class="main__btn">Все новости</button></a>
    </div>
</section>