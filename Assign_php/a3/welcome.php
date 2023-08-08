<?php

session_start();

if(!isset($_SESSION['col1']) and !isset($_SESSION['col2']) and !isset($_SESSION['col3'])){
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
            <a href="welcome.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        <h1>Hello <?php echo $_SESSION['col2'] . " " . $_SESSION['col3'];?>!</h1>
        <h1>Welcome to the dev community.</h1>
    </div>

</body>
</html>