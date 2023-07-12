<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
    <label for="">Username:</label>
    <input type="text" name="username" id="username">
    <button type="submit" name="login">Login</button>
  </form>
</body>
</html>
<?php
  $_SERVER["REQUEST_METHOD"] == "POST"
?>