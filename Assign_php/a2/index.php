<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter Subscription</title>
</head>

<body>
    <h1>Newsletter Subscription</h1>
    <?php
    if (isset($_GET['errorMessage'])) {
        echo $_GET['errorMessage'];
    } 
    else {
        echo '';
    }
    ?>
    <form action="subscribe.php" method="post">
        <input type="text" name="name" placeholder="Enter your name" value="<?php echo $_GET['name']; ?>">
        <input type="text" name="email" placeholder="Enter your email" value="<?php echo $_GET['email']; ?>">
        <input type="submit" name="subscribe" value="Subscribe">
    </form>
</body>

</html>