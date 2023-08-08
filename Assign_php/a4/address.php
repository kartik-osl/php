<?php
// require("../conn/connection.php");
// session_start();
// if (!isset($_SESSION['email'])) {
//     header("Location:index.php");
//     exit();
// }
// $email = $_SESSION['email'];
// $sql = "SELECT * FROM users WHERE email='" . $email . "';";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $toi = $row['toi'];
//         $education = $row['education'];
//         $profession = $row['profession'];
//         $hobbies = $row['hobbies'];
//     }
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address-Update</title>
</head>

<body>
    <a href="welcome.php">Home</a>
    <a href="profile.php">Profile</a>
    <a href="address.php">Address</a>
    <a href="logout.php">Logout</a>
    <form action="update_address.php" method="post">
        <select id="country" name="country" required>
            <option value="">Select</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
        </select>

        <select id="state" name="state" required>
            <option value="">Select</option>
        </select>

        <select id="city" name="city" required>
            <option value="">Select</option>
        </select>

        <input type="text" name="postal_code" id="postal_code" placeholder="Postal Code" required>
        <input type="submit" name="update_address" value="Update">
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(
            function () {
                function nameOfStates(selectedCountry) {
                    let state = {
                        'India': [
                            'Andaman and Nicobar Islands',
                            'Madhya Pradesh'
                        ],
                        'USA': [
                            'Texas',
                            'New York'
                        ]
                    };

                    let states = $('#state');
                    states.empty();
                    state[selectedCountry].forEach(function (state_val) {
                        states.append('<option value="' + state_val + '">' + state_val + '</option>');
                    });
                }

                function nameOfCities(selectedState) {
                    var cities = {
                        "Andaman and Nicobar Islands": [
                            "Port Blair"
                        ],
                        "Madhya Pradesh": [
                            "Faridabad",
                            "Gurgaon",
                        ],
                        "New York": ["Hello"]
                    }

                    let city = $('#city');
                    city.empty();
                    cities[selectedState].forEach(function (city_val) {
                        city.append('<option value="' + city_val + '">' + city_val + '</option>');
                    });
                }

                $('#country').change(function () {
                    var selectedCountry = $(this).val();
                    nameOfStates(selectedCountry);
                });

                $('#state').change(function () {
                    var selectedState = $(this).val();
                    nameOfCities(selectedState);
                });
            });
    </script>

</body>

</html>