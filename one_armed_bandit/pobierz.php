
<?php
$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "one_armed_bandit_users";

$dataBase = mysqli_connect($host, $db_user, $db_password, $db_name);

$login = $_COOKIE['login'];

$sql = "SELECT money FROM users WHERE login='$login'";

if (mysqli_connect_errno())

{
    echo "Wystąpił błąd połączenia z bazą";
}

$wynik = mysqli_query($dataBase,$sql);

while($row = mysqli_fetch_array($wynik))

{
    echo  $row['money']; 
}

mysqli_close($dataBase);

?>



