<?php

	session_start();
	
	if ((!isset($_GET['login'])) || (!isset($_GET['haslo'])))
	{
		header('Location: logowanie1.php');
		exit();
	}

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "one_armed_bandit_users";

	$polaczenie = mysqli_connect($host, $db_user, $db_password, $db_name);



	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		     $login = $_GET['login'];
		     setcookie("login",$login);
		     $haslo = $_GET['haslo'];
		
		     $login = htmlentities($login, ENT_QUOTES, "UTF-8");
		     $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
	
		    if (
		        ($rezultat = @$polaczenie->query(
		        sprintf("SELECT * FROM users WHERE login='%s' AND password='%s'",
		        mysqli_real_escape_string($polaczenie,$login),
		        mysqli_real_escape_string($polaczenie,md5($haslo)))))
                )
		    {
			    $ilu_userow = $rezultat->num_rows;
			    if($ilu_userow>0)
			    {

				    $_SESSION['zalogowany'] = true;

				    $wiersz = $rezultat->fetch_assoc();
				    $_SESSION['id'] = $wiersz['id'];
				    $_SESSION['user'] = $wiersz['user'];
				
				    unset($_SESSION['blad']);
				    $rezultat->free_result();

				    header('Location: gra.php');
				
			    } else {

                  //  echo '<script>alert("Błędne hasło lub login !")</script>';
                  //  echo '<a href="http://localhost/ciriculum/src/one_armed_bandit/logowanie1.php">cofnij</a>';
				
			            }
            }


      

		$polaczenie->close();

	}


	
?>