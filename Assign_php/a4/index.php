<?php
// if($_SERVER['REQUEST_METHOD']==='POST'){
//     echo "hello";

// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Submit">
    </form>
</body>

</html>