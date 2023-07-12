<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>SIGN UP!</h1>
  <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
    <label for="">Username:</label>
    <input type="text" name="username" id="username">
    <label for="">Password:</label>
    <input type="password" name="password" id="password">
    <button type="submit" name="signin">Sign In</button>
</form>
</body>
</html>
<?php
  if(isset($_POST["signin"])) {
    include("database.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
  }
?>