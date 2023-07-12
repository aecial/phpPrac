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
  <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga veniam molestiae distinctio, tenetur recusandae illo voluptate ea quidem sunt cumque quia debitis aspernatur dicta neque rerum alias voluptas repellat. Ratione!</h1>
  <form action="home.php" method="post">
    <button type="submit" name="logout">Log Out</button>
  </form>
</body>
</html>
<?php
  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["password"] . "<br>";

  if(isset($_POST["logout"])) {
    session_destroy();
    header("Location: sessions.php");
  }
?>