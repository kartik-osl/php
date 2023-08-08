<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {
        $email = $_POST["email"];
        $name = $_POST["name"];
        $error = false;

        if (empty($email)) {
            $errorMessage = 'Email is required';
            header("location:index.php?errorMessage=" . $errorMessage . "&name=" . $name);
            $error = true;
        } 
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMessage = 'Invaild email';
            header("location:index.php?errorMessage=" . $errorMessage . "&name=" . $name);
            $error = true;
        } 
        else {
            $error = false;
        }
        
        if (empty($name)) {
            $errorMessage = 'Name is required';
            header("location:index.php?errorMessage=" . $errorMessage . "&email=" . $email);
        } 
        else {
            $error = false;
        }

        if ($error == false) {
            setcookie("name", $name, time() + 120, "/");
            header("location:welcome.php");
        }
    }
} else {
    header("location:index.php");
}
?>