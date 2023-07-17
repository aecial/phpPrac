<?php
  session_start();
  if(isset($_POST['login'])) {
    $_SESSION['id'] = 5;
    header("Location: userNew.php");
  }
?>