<?php
session_start();

if(!isset($_SESSION['col1']) and !isset($_SESSION['col2'])){
    header("location: ./index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome-Page</title>
</head>
<body>  
    <a href="logout.php">logout</a>
    <p>Hello <?php echo $_SESSION['col1'];?>!</p>
    <p>Welcome to the dev community.</p>
</body>
</html>