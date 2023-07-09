<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="isset.php" method="post">
    <input type="text" name="username" id="username">
    <input type="password" name="password" id="password">
    <button type="submit" name="login">Log In</button>
  </form>
</body>
</html>
<?php
  if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if(empty($username)) {
      echo "Username not Inputted";
    }
    elseif(empty($password)) {
      echo "Password not Inputted";
    }
    else {
      echo "Welcome!";
    }
  }
?>