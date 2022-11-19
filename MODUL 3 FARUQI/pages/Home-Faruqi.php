<?php
require './config/conn.php';

$query = "SELECT * FROM showroomead_faruqi";
$result = mysqli_query($conn, $query);

function onClick($result)
{
  if (mysqli_num_rows($result) > 0) {
    header("Location: ./pages/List-Faruqi.php");
  } else {
    header("Location: ./pages/Add-Faruqi.php");
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Faruqi_1202204105</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include 'asset/style/style.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg bg-success">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" style="color: white;" href="#home">Home</a>
          <a class="nav-link" href="<?php if (mysqli_num_rows($result) > 0) {
                                      echo "./pages/List-Faruqi.php";
                                    } else {
                                      echo "./pages/Add-Faruqi.php";
                                    } ?>">My Car</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav End -->

  <!-- Jumbotron -->
  <section id="home">
    <div class="container">
      <div class="d-flex gap-5 wrap justify-content-center align-items-center">
        <div>
          <h1>Welcome To<br /> Faruqi Show Room</h1>
          <p class="mt-3">Faruqi Show Room is a car showroom under EAD <br/>Show Room Group</p>
          <a href="<?php if (mysqli_num_rows($result) > 0) {
                      echo "./pages/List-Faruqi.php";
                    } else {
                      echo "./pages/Add-Faruqi.php";
                    } ?>" class="button btn-success">My Car</a>
          <div class="d-flex align-items-center gap-5 mt-5">
            <img src="<?php echo "asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
            <p style="margin-top: 20px; font-size:14px;">Faruqi_1202204105</p>
          </div>
        </div>
        <img class="img" src="<?php echo "./asset/images/rubicon.png" ?>"alt="rubicon">
      </div>
    </div>
  </section>
  <!-- Jumbotron End -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>