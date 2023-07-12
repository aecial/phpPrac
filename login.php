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
<h1>LOG IN!</h1>
  <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
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
    $username = $_POST["username"];
    $password = $_POST["password"];
    include("database.php");
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      if(password_verify($password, $row["password"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        header("Location: home.php");
      }
    }
    else {
      echo "<h1>Invalid Input Try Again!</h1>";
    }
    mysqli_close($conn);
  }
?>