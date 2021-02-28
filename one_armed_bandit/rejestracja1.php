<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="systemStyle.css" rel="stylesheet">
</head>
<body>

<main>
<div class="login-box">
    <div class="title">

        One armed bandit

    </div>

    



    


<h2>Register</h2>
<form method="POST" action="rejestracja.php">
  <div class="user-box">
  <input type="text" name="login" class="input" value="login" autofocus required/>
    
  </div>
  <div class="user-box">
  <label>Password</label>
  <input type="password" name="haslo1" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
    
  </div>
  <div class="user-box">
      <label>Repeat password</label>
  <input type="password" name="haslo1" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
    
  </div>
  <input type="submit" value="register" id="submit" class="button"/>

<label>
           <div class="button"> <a href="logowanie1.php">undo</a> </div>
        </label>
</form>
</div>


</main>


</body>
</html>
