<?php

require("require/connection.php");
session_start();

if (!isset($_SESSION['col1']) and !isset($_SESSION['col2']) and !isset($_SESSION['col3'])) {
    header("Location:index.php");
    exit();
}

$email = $_SESSION['email'];

$sql = "SELECT * FROM `user` WHERE `email`='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $interest = $row['toi'];
        $education = $row['education'];
        $profession = $row['profession'];
        $hobbies = $row['hobbies'];
    }
} else {
    echo "0 results";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <a href="welcome.php">Home</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
    <form action="update.php" method="post">
        <input type="text" name="toi" placeholder="Topic of interest" value="<?php echo $interest; ?>">
        <input type="text" name="education" placeholder="Education" value="<?php echo $education; ?>">
        <input type="text" name="profession" placeholder="Profession" value="<?php echo $profession; ?>">
        <input type="text" name="hobbies" placeholder="Hobbies" value="<?php echo $hobbies; ?>">
        <input type="submit" value="Update">
    </form>
</body>

</html>