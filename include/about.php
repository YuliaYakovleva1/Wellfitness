<?php
require_once ("db_connect.php");

// Проверяем, есть ли данные пользователя в сессии
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
            <div class="lk__user">
                <hr class="lk__line">
                <h3 class="lk__user__name">
                    <?= $resArticle['name'] ?>
                </h3>
                <p class="lk__user__email">
                    <?= $resArticle['email'] ?>
                </p>
                <p class="lk__user__phone">
                    <?= $resArticle['phone'] ?>
                </p> 
                <a href="include/logout.php">
                        <p class="lk__user__exit" style="margin-bottom: 20px;">Выйти</p>
                    </a>
                <?php
                // Проверяем, является ли пользователь авторизованным
                if (isset ($_SESSION['user'])) {
                    // Проверяем, является ли пользователь администратором
                    if ($_SESSION['user']['rights'] === 'admin') {
                        ?>
                        <a class="admin_link" href="admin.php" style="color: #4B7EE8; margin-bottom: 20px;">Информация о пользователях</a>
                        <?php
                    }
                    ?>
                   
                <?php } ?>
            </div>
            <?php
        }
    } else {
        echo "Пользователь не найден в базе данных";
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }
} else {
    echo "Пользователь не авторизован";
    header("Location: {$_SERVER['HTTP_REFERER']}");
}
?>
