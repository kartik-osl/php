<?php
    $host = "localhost";
    $username = "root";
    $password = "K12@Entre";
    $db = "drupal";
    
    $conn = new mysqli($host, $username, $password, $db);

    if($conn->connect_error){
        echo "Something went wrong!";
    }
?>