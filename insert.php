<?php
  $username = "Aecial";
  $password = "pass1234";

  $hash = password_hash($password, PASSWORD_DEFAULT);
  include("database.php");
  $sql = "INSERT INTO users (user, passwords)
          VALUES ('$username', '$hash')";
  try {
    mysqli_query($conn, $sql);
  }
  catch(mysqli_sql_exception) {
    echo "Invalid Input";
  }
  
  mysqli_close($conn);
?>