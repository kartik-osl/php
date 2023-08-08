<?php
session_start();
require("../conn/connection.php");

if(!isset($_SESSION['email'])){
  header("Location:index.php");
  exit();
}

if (isset($_POST['address_update'])) {
  $email = $_SESSION['email'];
  $country = $_POST['country'];
  $state = $_POST['state'];
  $city = $_POST['city'];

  $sql = "UPDATE users SET country='" . $country . "',states='" . $state . "',cities='" . $city . "',postalcode='" . $postal_code . "' WHERE email='" . $email . "';";
  
  if(mysqli_query($conn,$sql) == true){
    header("Location:welcome.php");
  }
}
?>
