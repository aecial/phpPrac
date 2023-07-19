<?php
  session_start();
  include_once 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    if(isset($_SESSION['id'])) {
         echo "You are logged in as user".$_SESSION['id'];
         $sql = "SELECT * FROM users where id=".$_SESSION['id'].";";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $sqlImg = "SELECT * FROM profileimg WHERE userid = '$id'";
        $resultImg = mysqli_query($conn, $sqlImg);
        while($rowImg = mysqli_fetch_assoc($resultImg)) {
          echo "<div>";
            if($rowImg['status'] == 0) {
              echo "<img src='{$rowImg['img_location']}'".mt_rand().">";
            }
            else {
              echo "<img src='uploads/profiledefault.png'>";
            }
            echo $row['username'];
          echo "</div>";
        }
      }
    }
      
      echo "<form action='usersUpload.php' method='post' enctype='multipart/form-data'>
      <input type='file' name='file' id='myFile'>
      <button type='submit' name='submit'>Upload</button>
    </form>";
    }
    else {
      echo "You are not logged In!";
    }
  ?>
    
    <p>Login as User!</p>
    <form action="newLogin.php" method="post">
      <button type="submit" name="login">Login</button>
    </form>
    <form action="newLogout.php" method="post">
      <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>
