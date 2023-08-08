<?php
session_start();

if(!isset($_SESSION['fname']) and !isset($_SESSION['lname']) and !isset($_SESSION['email'])){
    header("Location:index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
</head>
<body>
    
            <button><a href="welcome.php" class="blue">Home</a></button>
            <button><a href="profile.php" class="blue">Profile</a></button>
            <button><a href="logout.php">Logout</a></button>
        
            <p class="test">Lorem ipsum dolor sit amet.</p>

</body>
</html>