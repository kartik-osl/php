<?php

require('../conn/connection.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $toi = $_POST["interest"];
  $education = $_POST["education"];
  $profession = $_POST["profession"];
  $hobbies = $_POST["hobbies"];
  $email = $_SESSION['email'];
 
  $sql = "UPDATE `user` SET `interest`='$interest',`education`='$education',`profession`='$profession',`hobbies`='$hobbies' WHERE `email`='$email'";

  if (mysqli_query($conn, $sql)) {
    header("Location:about.php");
  } else {
    echo "DB Error: " . mysqli_error($conn);
  }
}
?>