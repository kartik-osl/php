<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample page</title>
</head>

<body>
    <h1>Login page</h1>
    <?php
        if (isset($_GET['errorMessage'])) {
            echo $_GET['errorMessage'];
        }
    ?>

    <form action="login.php" method="POST">
        <input 
            type="text" 
            name="email" 
            placeholder="Enter your email" 
            value="<?php echo $_GET['email']; ?>"
            >
        <input 
            type="password" 
            name="password" 
            placeholder="Enter your password"
            >
        <input 
            type="submit" 
            value="Login"
            >
    </form>
</body>

</html>