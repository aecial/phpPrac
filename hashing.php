<?php
  $password = "pass1234";
  $hash = password_hash($password, PASSWORD_DEFAULT);
  
  if(password_verify("pass1234", $hash)) {
    echo "You are logged in!";
  }
  else {
    echo "Incorrect Password!";
  }
?>