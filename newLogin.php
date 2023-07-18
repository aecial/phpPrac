<?php
  session_start();
  if(isset($_POST['login'])) {
    $_SESSION['id'] = 6;
    header("Location: userNew.php");
  }
?>