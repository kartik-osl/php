<?php
session_start();
unset($_SESSION['col1']);
header("Location:index.php");
?>