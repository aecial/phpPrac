<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">x:</label>
    <input type="text" name="x" id="x">
    <select name="select">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <label for="">y:</label>
    <input type="text" name="y" id="y">
    <button type="submit">Submit</button>
  </form>
</body>
</html>
<?php
  $x = $_POST["x"];
  $operator = $_POST["select"];
  $y = $_POST["y"];
  $total = null;

  if ($operator == "+") {
    $total = $x + $y;
    echo "{$x} + {$y} = $total";
  }
  else if ($operator == "-") {
    $total = $x - $y;
    echo "{$x} - {$y} = $total";
  }
  else if ($operator == "*") {
    $total = $x * $y;
    echo "{$x} * {$y} = $total";
  }
  else if ($operator == "/") {
    $total = $x / $y;
    echo "{$x} / {$y} = $total";
  }
  else {
    echo "Invalid Input";
  }
?>