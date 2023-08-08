<?php
session_start();

require('../conn/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $error = false;

    if (empty($email)) {
        $errorMessage = 'Email is required';
        header("Location:index.php?error=" . $errorMessage . "&email=" . $email);
        $error = true;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = 'Invaild email';
        header("Location:index.php?error=" . $errorMessage  . "&email=" . $email);
        $error = true;
    } elseif (empty($password)) {
            $errorMessage = 'Password is required';
            header("Location:index.php?error=" . $errorMessage . "&email=" . $email);
            $error = true;
    } else {
            $error = false;
    }

        // echo "test1";
    if ($error == false) {
        $sql = "SELECT * FROM users WHERE email='" . $email . "';";
        // echo "test2";
        $result = $conn->query($sql);

        echo "test-if";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['col1'] = $row['email'];
                $_SESSION['col2'] = $row['password'];
                $_SESSION['col3'] = $row['fullname'];
                header("Location: welcome.php");
            }
        }
    }
}
$conn->close();
?>

