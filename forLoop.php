<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="forLoop.php" method="post">
  <label for="text">Input your name</label>
    <input type="text" name="text" id="text">
    <label for="number">Input a number to repeat your name</label>
    <input type="number" name="number" id="number">
    <button type="submit">Submit</button>
  </form>
</body>
</html>
<?php
  $name = $_POST["text"];
  $number = $_POST["number"];
  for ($i = 0; $i < $number; $i++){
    echo "<h2>{$name}</h2>";
  }
  
?>