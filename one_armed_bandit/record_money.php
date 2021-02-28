<?php

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "one_armed_bandit_users";

$dataBase = mysqli_connect($host, $db_user, $db_password, $db_name);

$login = $_COOKIE['login'];
$money = $_GET['send_money'];

$sql = "UPDATE users SET money='$money' WHERE login='$login'";

$wprowadz = mysqli_query($dataBase,$sql);

?>