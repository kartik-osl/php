<?php
require("../conn/connection.php");

session_start();

if (!isset($_SESSION['email'])) {
    header("Location:index.php");
    exit();
}

$email = $_SESSION['email'];

$sql = "SELECT * FROM user WHERE email='" . $email . "';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $toi = $row['toi'];
        $education = $row['education'];
        $profession = $row['profession'];
        $hobbies = $row['hobbies'];
    }
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
    <a href="welcome.php" class="blue">Home</a>
    <a href="profile.php" class="blue">Profile</a>
    <a href="logout.php">Logout</a>
    <br>
    <form action="update.php" method="post">
        <input type="text" name="toi" placeholder="Topic of Interest" value="<?php echo $toi; ?>">
        <input type="text" name="education" placeholder="Education" value="<?php echo $education; ?>">
        <input type="text" name="profession" placeholder="Profession" value="<?php echo $profession; ?>">
        <input type="text" name="hobbies" placeholder="Hobbies" value="<?php echo $hobbies; ?>">
        <input type="submit" value="Update">
    </form>
</body>

</html>