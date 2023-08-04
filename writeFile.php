<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
  <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>
<?php
  if(isset($_POST['submit'])) {
    $rand = mt_rand();
    $myfile = fopen("./files/$rand.php", "w");
    $content = '<?php
    session_start();
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auction</title>
  </head>
  <body>
    <h1>Hello</h1>
    <h1><?php echo $_SESSION["id"]; ?></h1>
    <h1>'.$rand.'</h1>
  </body>
  </html>';
    fwrite($myfile, $content);
    fclose($myfile);
  }
  
?>