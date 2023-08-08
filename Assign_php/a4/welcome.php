<?php
session_start();

require("../conn/connection.php");

if (!isset($_SESSION['email'])) {
  header("Location:index.php");
  exit();
}

$email = $_SESSION['email'];
$sql = "SELECT * FROM user WHERE email='" . $email . "';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $fullname = $row['fullname'];
    $email = $row['email'];
    $toi = $row['toi'];
    $education = $row['education'];
    $profession = $row['profession'];
    $hobbies = $row['hobbies'];
    $error = false;

    if (empty($toi) || empty($education) || empty($profession) || empty($hobbies)) {
      $error = true;
    }
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
  <a><span class="progress-bar"></span></a>
  <a href="profile.php" class="blue">Profile</a>
  <a href="address.php" class="blue">Address</a>
  <a href="logout.php">Logout</a>
  <h1>Hello
    <?php echo $_SESSION['fullname']; ?> !
  </h1>
  <h1>Welcome to the dev community!</h1>
  </div>

</body>

</html>