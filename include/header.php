<?php
include ('include/db_connect.php');
$user = isset ($_SESSION['user']['id']);
?>

<header itemscope itemtype="http://schema.org/Organization">
    <!-- Панель навигации  -->
    <nav class="nav">
        <div class="container-full">
            <div class="row justify__content__between align__items__center pt-10px">
                <div class="col-auto">
                    <ul>
                        <li class="nav__logo"><a href="index.php"><img src="img/nav/logo.png" alt="logo"></a>
                        </li>
                        <li class="nav__item"><a href="#" class="nav__link nav__city">Moscow</span></a></li>
                    </ul>
                </div>
                <div class="col-auto display3" itemtype="http://schema.org/Organization">>
                    <ul>
                        <li class="nav__item"><a href="#" class="nav__link">Для дилеров</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Become a Partner</a></li>
                        <li class="nav__item"><a href="#" class="nav__link" itemprop="telephone">+7 (800) 000-00-00</a></li>
                        <li class="nav__item"><a href="call-request.php" style="color: #F53B49;"
                                class="nav__link">Заказать звонок</a>
                        </li>
                    </ul>
                </div>
                <div id="popup" class="popup">
                    <span class="close" onclick="closePopup()">&times;</span>
                    <h2 class="popup__title">Заказать звонок</h2>
                    <form class="popup__form" id="callForm" enctype="multipart/form-data" method="post">
                        <input type="text" id="username" name="username" placeholder="Ваше имя" required><br><br>
                        <input type="tel" id="phone" name="phone" placeholder="Ваш телефон" required><br><br>
                        <button class="main__btn" type="submit" name="submit_call">Отправить</button>
                    </form>
                </div>

                <div id="overlay" class="overlay"></div>
                <div class="col-auto">
                    <?php
                    if (
                        isset ($_SESSION['user']) == 'user' || isset ($_SESSION['user']
                    )
                    ) {
                        if (isset ($_SESSION['user'])) {
                            // Получаем ID пользователя из сессии
                            $user_id = $_SESSION['user']['id'];

                            // Запрос к базе данных для получения данных пользователя
                            $sql = "SELECT * FROM `user` WHERE `id`='$user_id'";
                            $res = $mysqli->query($sql);

                            // Проверяем, есть ли результаты запроса
                            if ($res->num_rows > 0) {
                                while ($resArticle = $res->fetch_assoc()) {
                                    ?>
                                    <li class="nav__item"><a href="lk.php" class="nav__link">
                                            <?= $resArticle['name'] ?>
                                        </a></li>
                                    <li class="nav__item"><a href="#" class="nav__img"><img src="img/nav/profile.png" alt="profile"></a>
                                    </li>
                                <?php }
                            }
                        }
                    } else { ?>
                        <li class="nav__item"><a href="aut.php" class="nav__link">Войти</a></li>
                        <li class="nav__item"><a href="aut.php" class="nav__img"><img src="img/nav/profile.png"
                                    alt="profile"></a>
                        </li>
                    <?php } ?>
                </div>

                <div id="overlay" class="overlay"></div>
                <div id="loginPopup" class="popup">
                    <span class="close" onclick="closePopup2()">&times;</span>
                    <h2 class="popup__title">Вход в личный кабинет</h2>
                    <form class="popup__form" id="loginForm" enctype="multipart/form-data" method="post"
                        action="include/aut.php">
                        <input type="email" name="email" placeholder="Email" required><br><br>
                        <input type="password" name="password" placeholder="Пароль" required><br><br>
                        <button type="submit" class="main__btn">Войти</button>
                        <a href="#" class="form__reg" onclick="openPopup()">Зарегистрироваться</a>
                    </form>
                    <div id="loginMessage"></div>
                </div>

                <div id="overlay" class="overlay"></div>
                <div id="registrationPopup" class="popup">
                    <span class="close" onclick="closePopup3()">&times;</span>
                    <h2 class="popup__title">Регистрация</h2>
                    <form class="popup__form" id="registrationForm" enctype="multipart/form-data" method="post"
                        action="include/reg.php">
                        <input type="text" name="name" placeholder="Имя*" required><br><br>
                        <input type="email" name="email" placeholder="Email*" required><br><br>
                        <input type="phone" name="phone" placeholder="Телефон*" required><br><br>
                        <input type="password" name="password" placeholder="Пароль*" required><br><br>
                        <input type="password" name="password_repeat" placeholder="Повторить пароль*" required><br><br>
                        <div><input type="text" name="rights" value="user" style="display: none;" id=""></div>
                        <button type="submit" class="main__btn">Зарегистрироваться</button>
                        <p class="registration__rec" style="margin-top: 16px;">Пароль должен быть не менее 6 символов
                            длиной. <br>
                            *Поля, обязательные для заполнения.</p>
                    </form>
                </div>
                <div id="overlay" class="overlay"></div>
            </div>
        </div>

        <img class="nav__line" src="img/nav/line.png" alt="">
    </nav>

    <nav class="nav">
        <div class="container-full">
            <div class="row justify__content__between align__items__center">
                <div class="col-auto">
                    <ul>
                        <li class="nav__logo"><a href="catalog.php" class="nav__btn"><img class="btn__img"
                                    src="img/nav/menu.png" alt="menu">Каталог</a></li>
                        <li class="nav__item"><a href="#" class="nav__img nav__search"><img src="img/nav/search.png"
                                    alt="search"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto display2">
                    <li class="nav__item"><a href="brands.php" class="nav__link2">Бренды</a></li>
                    <li class="nav__item"><a href="service.php" class="nav__link2">Сервис</a></li>
                    <li class="nav__item"><a href="service.php" class="nav__link2">Услуги</a></li>
                    <li class="nav__item"><a href="service.php" class="nav__link2">Поддержка</a></li>
                    <li class="nav__item"><a href="about.php" class="nav__link2">О компании</a></li>
                    <li class="nav__item"><a href="blog.php" class="nav__link2">Блог</a></li>
                    <li class="nav__item"><a href="where.php" class="nav__link2">Где купить</a></li>
                    <li class="nav__item"><a href="contacts.php" class="nav__link2 mr-110">Контакты</a></li>
                </div>
                <div class="col-auto">
                    <li class="nav__item"><a href="favorites.php" class="nav__img"><img src="img/nav/favor.png"
                                alt="favorites"></a>
                        <?php
                        $totalItems = 0;
                        if (isset ($_SESSION['user'])) {
                            // Получаем ID пользователя из сессии
                            $user_id = $_SESSION['user']['id'];

                            // Запрос к базе данных для получения данных пользователя
                            $sql = "SELECT title, current_price, old_price FROM favorites WHERE `user_id`='$user_id'";
                            $result = $mysqli->query($sql);
                            if ($result->num_rows > 0) {
                                // вывод данных каждого товара
                                while ($row = $result->fetch_assoc()) {
                                    $totalItems++;
                                }
                            }
                        }
                        ?>
                        <span id="counter2">
                            <?php echo $totalItems; ?>
                        </span>
                        <script>
                            document.getElementById('counter2').innerText = '<?php echo $totalItems; ?>';
                        </script>
                    </li>
                    <li class="nav__item">
                        <a href="cart.php" class="nav__img"><img src="img/nav/cart.png" alt="cart"></a>
                        <?php
                        $totalItems = 0;
                        if (isset ($_SESSION['user'])) {
                            // Получаем ID пользователя из сессии
                            $user_id = $_SESSION['user']['id'];

                            // Запрос к базе данных для получения данных пользователя
                            $sql = "SELECT title, current_price, old_price FROM product WHERE `user_id`='$user_id'";
                            $result = $mysqli->query($sql);
                            if ($result->num_rows > 0) {
                                // вывод данных каждого товара
                                while ($row = $result->fetch_assoc()) {
                                    $totalItems++;
                                }
                            }
                        } ?>
                        <span id="counter3">
                            <?php echo $totalItems; ?>
                        </span>
                        <?php echo "<script>
                                 document.getElementById('counter3').innerText = '$totalItems';
                            </script>";
                        ?>

                    </li>

                    <!-- Бургер-меню -->
                    <span class="burger__img" style="font-size:30px; cursor:pointer" onclick="openNav()"><img
                            src="img/nav/burger.svg" />
                    </span>
                    <section class="nav__mobil">
                        <div class="row justify__content__end">
                            <div class="col-auto header__nav">
                                <div id="myNav" class="overlay2">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                                    <div class="overlay-content">
                                        <a href="index.php">Главная</a>
                                        <a href="brands.php">Бренды</a>
                                        <a href="service.php">Сервис</a>
                                        <a href="service.php">Услуги</a>
                                        <a href="service.php">Поддержка</a>
                                        <a href="about.php">О компании</a>
                                        <a href="blog.php">Блог</a>
                                        <a href="where.php">Где купить</a>
                                        <a href="contacts.php">Контакты</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </nav>

    <!-- Меню сайта -->
    <section class="menu">
        <div class="container-full">
            <div class="row justify__content__between align__items__center">
                <div class="col-auto">
                    <ul>
                        <li class="nav__item"><a href="for_home.php" class="menu__link nav__menu">Для
                                дома</span></a></li>
                        <li class="nav__item"><a href="for_fitness.php" class="menu__link nav__menu">Для
                                фитнеса</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</header>