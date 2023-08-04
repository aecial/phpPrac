<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php
      include('text.txt');
    ?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
      <input type="file" name="file" id="file">
      <button type="submit" name="submit">Submit</button>
      
    </form>
    <?php
      if(isset($_POST['submit'])) {
        $file = $_FILES['file'];
        print_r($file);
      }
    ?>
</body>
</html>