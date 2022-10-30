<?php

require "db.php";

$event = $_POST["event"] . " " . $_POST["time"];
$starev = date("d-m-Y H:i", strtotime($event));
$endev = date("d-m-Y H:i", strtotime($event) + 60 * 60 * 24 * $_POST["jam"]);
$car = $_POST["mobil"];
$pone = $_POST["pone"];

$serprice = 0;
if (isset($_POST["addons"])) {
    foreach ($_POST["addons"] as $add) {
        if ($add == "driver") {
            $serprice += 250;
        }
        if ($add == "guide") {
            $serprice += 250;
        }
        if ($add == "fuel") {
            $serprice += 250;
        }
    }
} else {
    $serprice += 0;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ESD Venue</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">

            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="faruqi_home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faruqi_booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="container" style="text-align: center;">
        <div class="m-2">
            <p class="m-0" style="font-size:30px">Thank you <?php echo $credit; ?> for Reserving</p>
            <p class="m-0" style="font-size:25px">Please double check your reservation detail</p>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Car</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                <tr>
                    <td><?php echo rand(8000000, 10000000); ?></td>
                    <td><?php echo $credit; ?></td>
                    <td><?php echo $starev ?></td>
                    <td><?php echo $endev ?></td>
                    <td><?php echo $car ?></td>
                    <td><?php echo $pone ?></td>
                    <td>
                        <?php
                        if (isset($_POST["addons"])) {
                            foreach ($_POST["addons"] as $add) {
                                echo "<li>$add</li>";
                            }
                        } else {
                            echo "no service";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($_POST["mobil"] == $listCar[0]["cname"]) {
                            echo ($_POST["jam"] * $listCar[0]["price"]) + $serprice;
                        } else if ($_POST["mobil"] == $listCar[1]["cname"]) {
                            echo ($_POST["jam"] * $listCar[1]["price"]) + $serprice;
                        } else if ($_POST["mobil"] == $listCar[2]["cname"]) {
                            echo ($_POST["jam"] * $listCar[2]["price"]) + $serprice;
                        } else {
                            echo "0";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="fixed-bottom text-center pt-3 bg-light">
        <p style="text-align: center; color: lightslategray;">
            Created by: <?php echo $credit; ?>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>