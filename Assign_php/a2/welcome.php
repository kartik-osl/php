<?php

if (!isset($_COOKIE["name"])) {
    header("Location: index.php");
}
else{
    $name = $_COOKIE["name"];
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
    
        <h1>Thanks for subscribing, <?php echo $name; ?>.</h1>

</body>
</html>