<?php
require('../conn/connection.php');

session_start();

if (!isset($_SESSION['email'])) {
  header("Location:index.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $toi = $_POST["toi"];
  $education = $_POST["education"];
  $profession = $_POST["profession"];
  $hobbies = $_POST["hobbies"];
  $email = $_SESSION['email'];

  $sql = "UPDATE users SET toi='" . $toi . "',education='" . $education . "',profession='" . $profession . "',hobbies='" . $hobbies . "' WHERE email='" . $email . "';";

  if (mysqli_query($conn, $sql)) {
    header("Location:about.php");
  }
}
?>