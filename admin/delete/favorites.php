<?php
session_start();
include ("../../include/db_connect.php");

$id = $_GET['id'];

$query = "DELETE FROM favorites WHERE id='$id'";

$result = mysqli_query($mysqli, $query) or die ("Ошибка " . mysqli_error($mysqli));

mysqli_close($mysqli);

header("Location: {$_SERVER['HTTP_REFERER']}");
?>