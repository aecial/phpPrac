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
    <label for="">Age:</label>
    <input type="number" name="age" id="age">
    <button type="submit" name="submit">Submit</button>
  </form>
</body>
</html>
<?php
  if(isset($_POST["submit"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    echo "Hello {$username} <br>";
    echo "You are {$age} years old! <br>";
  }
  
?>
