<?php
if (isset($_POST['username'])) {
    function getUserLocation($ip)
    {
        $apiKey = 'ceecb5bbb3ec09';
        if ($ip === '127.0.0.1') {
            return [
                'ip' => $ip,
                'city' => 'Indore',
                'latitude' => '23.2599',
                'longitude' => '77.4126'
            ];
        }

        $apiurl = "http://ipinfo.io/$ip?access_key=$apiKey";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiurl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $locationData = json_decode($response, true);
        return $locationData;
    }

    $userIP = $_SERVER['REMOTE_ADDR'];
    // echo $userIP;
    $userLocation = getUserLocation($userIP);
    if ($userIP === '127.0.0.1') {
        $lat = $userLocation['latitude'];
        $long = $userLocation['longitude'];
    } else {
        $latlong = $userLocation['location'];
        list($lat, $long) = explode(',', $latlong);
    }

    $name = $_POST['username'];
    $apiKey = 'f2dc96a5874460b528288d4f8500e1c3';

    $apiUrl = "https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$long&appid=$apiKey";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    // Display weather information
    if ($data && isset($data['main'])) {
        $weather = $data['weather'][0]['main'];
        $temperature = ($data['main']['temp']) - 273.15;

        date_default_timezone_set('Asia/Kolkata');
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Weather App</title>
        </head>

        <body>
            <a href="index.php">Home</a>
            <?php
                echo "<h1>Hi, $name</h1>";
                echo "<h2>Weather Details</h2>";
                echo "<h2>Weather : $weather</h2>";
                echo "<h2>Temperature: $temperature °C  </h2>";
            ?>
        </body>

        </html>
        <?php
    }
} else {
    header("Location:index.php");
}
?>