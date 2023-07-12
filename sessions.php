<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  This is the login page <br>
  <br>
  <form action="sessions.php" method="post">
    <label for="">Username:</label>
    <input type="text" name="username" id="username">
    <label for="">Password:</label>
    <input type="password" name="password" id="password">
    <button type="submit" name="login">Login</button>
  </form>
</body>
</html>
<?php
  if(isset($_POST["login"])) {
    if(empty($_POST["username"]) || empty($_POST["password"])) {
      echo "Fill Up the Requirements!";
    }
    else {
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["password"] = $_POST["password"];

      header("Location: home.php");
    }
    
  }
  

  
?>