<?php

require("../conn/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $error = false;
    $errorMessage = '';

    if (empty($email)) {
        $errorMessage = 'Email is required';
        $error = true;
        header("location:index.php?errorMessage=" . $errorMessage);
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = 'Email is invalid';
        $error = true;
        header("location:index.php?errorMessage=" . $errorMessage);
    } elseif (empty($password)) {
        $errorMessage = 'Password is required';
        $error = true;
        header("location:index.php?error=" . $errorMessage . "&email=" . $email);
    } else {
        $error = false;
    }

    if ($error == false) {
        $sql = "SELECT * FROM users WHERE email='" . $email . "'";
        var_dump($sql);
        $result = $conn->query($sql);
        echo 'Hello test';
        var_dump($result);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['col1'] = $row['email'];
                header("location: ./welcome.php");
            }
        } else {
            echo "<br>Invalid credentials!";
        }
    }
}
else{
    echo "error";
}

$conn->close();
?>