<?php
session_start();

if(!isset($_SESSION['fullname']) and !isset($_SESSION['email'])){
    header("Location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    
            <a href="welcome.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        <h1>Sample text</h1>
        <p>Lorem ipsum dolor sit amet.</p>
    </div>

</body>
</html>