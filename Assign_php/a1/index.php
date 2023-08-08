<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment-1</title>
</head>

<body>
    
    <?php
    if (isset($_GET['errorMessage'])) {
        echo $_GET['errorMessage'];
    } else {
        echo '';
    }
    ?>

    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Enter your email" value="<?php echo $_GET['email']; ?>">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" value="Login">
    </form>
</body>

</html>