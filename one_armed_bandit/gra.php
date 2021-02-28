<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: logowanie1.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>One armed bandit</title>
    <link rel="stylesheet" href="game_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script_gamess.js"></script>
</head>

<body>

<div id="logout">

    <a href="logout.php">Log out</a>
</div>

<section class="viewMain">
<label id="money" class="mainText">Money: </label>

<div id="rates" class="mainText" style="font-size: 20px; text-align: center;">  Rate: 1 </div>

<div id="credit" class="mainText" style="font-size: 20px; text-align: center;">free credit for 59</div>

    <td id="photo1"><img src="Images/watermelon.png" id="1" class="fruits" alt="display error"> </td>
    <td id="photo2"><img src="Images/watermelon.png" id="2" class="fruits" alt="display error"> </td>
    <td id="photo3"><img src="Images/watermelon.png" id="3" class="fruits" alt="display error"> </td>






    <form action="record_money.php" method="GET" >
        <input hidden type="text" id="download" style="margin: 5%;">
        <input type="button" class="buttonStart" id="start" style="margin: 5%;" value="START">
    </form>

    <div style="margin-top: 5%;">
    <input type="button" id="test" class="buttonStart" value="10">
    <input type="button" id="rate2" class="buttonStart" value="25">
    <input type="button" id="rate3" class="buttonStart" value="100">
    </div>

    <input type="button" id="buttonCredit" class="buttonStart" value="Credit" style="margin-top: 1%;">

</section>

    <h1 id="test" style="color: white; font-size: 25px;" >test</h1>

<div id="123456" style="color: white; font-size: 25px;">

</div>

</body>

</html>