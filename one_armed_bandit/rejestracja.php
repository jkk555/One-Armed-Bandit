<?php
session_start();

//require_once "connect.php";

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "one_armed_bandit_users";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
        $login = $_POST['login'];
		$haslo = $_POST['haslo1'];
        
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
        
        $haslo = md5($haslo);

        $sql = "INSERT INTO `users` (`login`, `password`, `money`) VALUES ('$login','$haslo',600)";
        
        if($polaczenie->query($sql)===TRUE)
        {
        echo '<a href="logout.php">Wróć</a>';
        } 
        else 
        {
        echo "Error: " . $sql . "<br>" . $polaczenie->error;
        }

        $polaczenie->close();
    }
    ?>