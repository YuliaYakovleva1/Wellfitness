<section class="tabs">
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
                                                </svg>
                                            </a>
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