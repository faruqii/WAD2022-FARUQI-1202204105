<?php
require "db.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ESD CAR RENT</title>
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

    <div class="mt-2 mb-2 container bg-dark">
        <p class="p-1" style="text-align: center; color: white">Rent Your Car!</p>
    </div>

    <div class="container card shadow-sm">
        <div class="d-flex justify-content-around">

            <div class="col-6 ps-5 pe-5 d-flex align-items-center">
                <?php
                if (isset($_GET["img"])) {
                ?><img class="" width="100%" src="<?= $_GET["img"]; ?>" alt="">
                <?php
                } else {
                ?><img width="100%" src="img/foto0.jpg" alt="">
                <?php } ?>
            </div>

            <div class="col-6 ps-5 pe-5">
                <ul type="none">

                    <form action="faruqi_myBooking.php" method="POST">

                        <li class="m-1">
                            <label for="nama">Name</label><br>
                            <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $credit ?>" readonly>
                        </li>

                        <li class="m-1">
                            <label for="event">Date</label><br>
                            <input class="form-control" type="date" name="event" id="event">
                        </li>

                        <li class="m-1">
                            <label for="time">Rent Start Time</label><br>
                            <input class="form-control" type="time" name="time" id="time">
                        </li>

                        <li class="m-1">
                            <label for="jam">Duration (Day)</label><br>
                            <input class="form-control" type="number" name="jam" id="jam" min="1" value="1">
                        </li>

                        <li class="m-1">
                            <label for="mobil">Car</label>
                            <select class="form-select" name="mobil" id="mobil">
                                <option selected>Choose...</option>
                                <?php foreach ($listCar as $cr) : ?>
                                    <!-- display image with selected car -->
                                    <?php
                                    if ($cr["cname"] == $_GET["cname"]) {
                                    ?><option value="<?= $cr["cname"]; ?>" img="<?= $cr["img"]; ?>"><?= $cr["cname"]; ?></option>
                                    <?php
                                    } else {
                                    ?><option value="<?= $cr["cname"]; ?>"><?= $cr["cname"]; ?></option>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </select>
                        </li>

                        <li class="m-1">
                            <label for="pone">Phone Number</label><br>
                            <input class="form-control" type="number" name="pone" id="pone" min="0">
                        </li>

                        <li class="m-1">
                            <label for="service">Add Ons Service</label><br>
                            <input class="form-check-input m-1" type="checkbox" name="addons[]" value="driver" id="driver"><label class="form-check-label" for="driver">Driver / $250</label><br>
                            <input class="form-check-input m-1" type="checkbox" name="addons[]" value="guide" id="guide"><label class="form-check-label" for="guide">Tour Guide / $250</label><br>
                            <input class="form-check-input m-1" type="checkbox" name="addons[]" value="fuel" id="fuel"><label class="form-check-label" for="fuel">Fuel / $250</label><br>
                        </li>

                        <li class="text-center">
                            <button class="btn btn-warning justify-content-around" collapse="collapse" type="submit" style="width: 500px;">Book</button>
                        </li>

                    </form>

                </ul>
            </div>

        </div>

    </div>

    <footer class="fixed-bottom text-center pt-3 bg-light">
        <p style="text-align: center; color: lightslategray;">
            Created by: <?php echo $credit; ?>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>