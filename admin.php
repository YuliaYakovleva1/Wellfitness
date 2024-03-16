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
                <a href="lk.php">
                    <p class="for__home__bread__text">В личный кабинет</p>
                </a>
            </div>
        </div>
        <div class="about">
            <div class="container-full">
                <h3 class="main__title blog__title">Информация о пользователях</h3>
            </div>
        </div>

        <hr style="margin-left: 0; width: 100%; margin-bottom: 40px;">
        <section class="lk__blocks row container-full">
            <div class="lk__block__left">
                <div class="lk__block__right__mobile">
                    <?php include ('include/about.php'); ?>
                </div>

                <h2 class="admin__table__title">Зарегистрированные пользователи</h2>
                <table style="margin-bottom: 60px">
                    <tr>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Телефон</th>
                        <th class='center-aligh'>Товары в избранном (шт.)</th>
                        <th class='center-aligh'>Товары в корзине (шт.)</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM `user`";
                    $res = $mysqli->query($sql);

                    if ($res->num_rows > 0) {
                        while ($resArticle = $res->fetch_assoc()) {

                            // Получаем количество товаров в избранном для текущего пользователя
                            $favorites_count_sql = "SELECT COUNT(*) AS favorites_count FROM `favorites` WHERE `user_id` = {$resArticle['id']}";
                            $favorites_count_res = $mysqli->query($favorites_count_sql);
                            $favorites_count = $favorites_count_res->fetch_assoc()['favorites_count'];

                            // Получаем количество товаров в корзине для текущего пользователя
                            $cart_count_sql = "SELECT COUNT(*) AS cart_count FROM `product` WHERE `user_id` = {$resArticle['id']}";
                            $cart_count_res = $mysqli->query($cart_count_sql);
                            $cart_count = $cart_count_res->fetch_assoc()['cart_count'];

                            // Вывод данных о пользователях в таблицу
                            echo "<tr>";
                            echo "<td>" . $resArticle['name'] . "</td>";
                            echo "<td>" . $resArticle['email'] . "</td>";
                            echo "<td>" . $resArticle['phone'] . "</td>";
                            echo "<td class='center-aligh'>" . $favorites_count . "</td>";
                            echo "<td class='center-aligh'>" . $cart_count . "</td>";

                            echo "</tr>";
                        }
                    }
                    ?>
                </table>

                <h2 class="admin__table__title">Пользователи, заказавшие звонок</h2>
                <table style="margin-bottom: 60px">
                    <tr>
                        <th>Имя</th>
                        <th>Телефон</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM `call_request`";
                    $res = $mysqli->query($sql);

                    if ($res->num_rows > 0) {
                        while ($resArticle = $res->fetch_assoc()) {
                            $users = array(
                                array(
                                    "Имя" => $resArticle['username'],
                                    "Телефон" => $resArticle['phone'],
                                )
                            );
                            // Вывод данных о пользователях в таблицу
                            foreach ($users as $user) {
                                echo "<tr>";
                                echo "<td>" . $user['Имя'] . "</td>";
                                echo "<td>" . $user['Телефон'] . "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </table>

                <h2 class="admin__table__title">Пользователи, написавшие обращение</h2>
                <table style="margin-bottom: 60px">
                    <tr>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Текст</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM `appeal`";
                    $res = $mysqli->query($sql);

                    if ($res->num_rows > 0) {
                        while ($resArticle = $res->fetch_assoc()) {
                            $users = array(
                                array(
                                    "Имя" => $resArticle['username'],
                                    "Текст" => $resArticle['text'],
                                    "Email" => $resArticle['email'],
                                )
                            );
                            // Вывод данных о пользователях в таблицу
                            foreach ($users as $user) {
                                echo "<tr>";
                                echo "<td>" . $user['Имя'] . "</td>";
                                echo "<td>" . $user['Email'] . "</td>";
                                echo "<td>" . $user['Текст'] . "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </table>

            </div>

            <div id="lk__user" class="lk__block__right">
                <?php include ('include/about.php'); ?>
            </div>
        </section>
    </main>


    <?php include_once ('include/footer.php') ?>

    <script src="js/script.js"></script>
    <script src="js/tabs2.js"></script>
</body>

</html>