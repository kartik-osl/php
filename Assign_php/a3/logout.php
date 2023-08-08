<?php
    session_start();
    unset($_SESSION['col1']);
    unset($_SESSION['col2']);
    unset($_SESSION['col3']);
    header("Location:index.php");
?>