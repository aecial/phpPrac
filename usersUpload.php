
<?php
session_start();
include_once "database.php";
if(isset($_POST["submit"])) {
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  if(in_array($fileActualExt, $allowed)) {
    if($fileError === 0) {
      if($fileSize < 500000) {
        $fileNameNew = "profile".$_SESSION['id'].".".$fileActualExt;
        $fileDestination = 'uploads/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $fileDestination);
        $sql = "UPDATE profileimg SET status=0 where userid='{$_SESSION['id']}';";
        $result = mysqli_query($conn, $sql);
        $sqlLoc = "UPDATE profileimg SET img_location = '{$fileDestination}' WHERE userid='{$_SESSION['id']}';";
        $resultLoc = mysqli_query($conn, $sqlLoc);
        header("Location: userNew.php?uploadSuccess");
      }
      else {
        echo "Maximum file size exceeded!";
      }
    }
    else {
      echo "There was an error uploading your file!";
    }
  }
  else {
    echo "You cannot upload files of this type!";
  }
}
?>
