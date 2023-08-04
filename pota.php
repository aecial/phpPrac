<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="pota.php" method="post">
    <input type="number" name="price">
    <button type="submit" name="submit">Submit</button>
  </form>
</body>
</html>
<?php
  if(isset($_POST['submit'])) {
    echo $_POST['price'];
  }
?>