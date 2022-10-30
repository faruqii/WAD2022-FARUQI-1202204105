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

        <title>EAD CAR RENT</title>
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
        
        <!-- Text -->
        <div>
            <p class="m-2" style="text-align: center; font-size: 25px">WELCOME TO EAD CAR RENT!</p>
        </div>

        <div class="container bg-white">
            <p class="p-1" style="text-align: center; color: black">Find your best car and drive it!</p>
        </div>
        <!-- End Text -->

        <!-- Card -->
        <div class="container">
            <div class="d-flex justify-content-around">
                <!-- Card 1 -->
                <div class="col-3 m-1">
                    <div class="card shadow-sm rounded" >
                        <img src="<?php echo $listCar[0]["img"];?>" class="img-fluid rounded-start" style="display:flex; justify-items:center; align-items:center;" alt="">
                        <div class="m-3">
                            <p class="m-0" style="font-size: 20px"><?php echo $listCar[0]["cname"];?></p>
                            <p class="m-0" style="color: grey">$<?php echo $listCar[0]["price"];?> / day</p>
                        </div>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: #f9a825;">6 Seat with Captain Seat</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: #f9a825;">Comfortable</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: #f9a825;">Elegant</p>
                        <hr class="m-0">
                        <div class="text-center bg-light">
                            <button class="m-2 btn btn-warning" type="submit"><a href="faruqi_booking.php?img=<?= $listCar[0]["img"];?>&name=<?= $listCar[1]["cname"];?>" style="color: white; text-decoration: none;">Book Now</a></button>
                        </div>
                    </div>
                </div>
                <!-- End Card 1 -->
                
                <!-- Card 2 -->
                <div class="col-3 m-1 ms-2 me-2">
                    <div class="card shadow-sm rounded" >
                        <img src="<?php echo $listCar[1]["img"];?>" class="img-fluid rounded-start" style="display:flex; justify-items:center; align-items:center;" alt="">
                        <div class="m-3">
                            <p class="m-0" style="font-size: 20px"><?php echo $listCar[1]["cname"];?></p>
                            <p class="m-0" style="color: grey">$<?php echo $listCar[1]["price"];?> / day</p>
                        </div>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: #f9a825;">7 Seat</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: #f9a825;">Powerful Engine</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: #f9a825;">Adventure Design</p>
                        <hr class="m-0">
                        <div class="text-center bg-light">
                            <button class="m-2 btn btn-warning" type="submit"><a href="faruqi_booking.php?img=<?= $listCar[1]["img"];?>&name=<?= $listCar[1]["cname"];?>" style="color: white; text-decoration: none;">Book Now</a></button>
                        </div>
                    </div>
                </div>
                <!-- End Card 2 -->

                <!-- Card 3 -->
                <div class="col-3 m-1">
                    <div class="card shadow-sm rounded">
                        <img src="<?php echo $listCar[2]["img"];?>" class="img-fluid rounded-start" style="display:flex; justify-items:center; align-items:center;" alt="">
                        <div class="m-3">
                        <p class="m-0" style="font-size: 20px"><?php echo $listCar[2]["cname"];?></p>
                            <p class="m-0" style="color: grey">$<?php echo $listCar[2]["price"];?> / day</p>
                        </div>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: #f9a825;">7 Seat</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: #f9a825;">Full AC</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: #f9a825;">Fun to Drive</p>
                        <hr class="m-0">
                        <div class="text-center bg-light">
                            <button class="m-2 btn btn-warning" type="submit"><a href="faruqi_booking.php?img=<?= $listCar[2]["img"];?>&name=<?= $listCar[1]["cname"];?>" style="color: white; text-decoration: none;">Book Now</a></button>
                        </div>
                    </div>
                </div>
                <!-- End Card 3-->

            </div>

        </div>
        <!-- End Card -->

        <footer class="fixed-bottom text-center pt-3 bg-light">
            <p style="text-align: center; color: lightslategray;">
                Created by: <?php echo $credit;?>
            </p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>