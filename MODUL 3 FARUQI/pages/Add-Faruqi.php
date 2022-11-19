<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Car | Faruqi_1202204105</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/style/style.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg bg-success">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" href="../index.php">Home</a>
          <a class="nav-link" style="color: white;" href="#">My Car</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav End -->

  <!-- Form -->
  <section id='form'>
    <div class="container">
      <h1 class="add">Add Car</h1>
      <p class="tambahp">Add New Car to List Show Room</p>
      <form action="../config/add.php" method="POST" enctype="multipart/form-data">
        <label for="nama">Car Name</label>
        <input type="text" id="nama" name="nama" placeholder="Car Name">
        <label for="pemilik">Owner Name</label>
        <input type="text" id="pemilik" name="pemilik" placeholder="Owner Name">
        <label for="merk">Brand</label>
        <input type="text" id="merk" name="merk" placeholder="Car Brand">
        <label for="tanggalbeli">Purchase Date</label>
        <input type="date" id="tanggalbeli" name="tanggalbeli">
        <label for="desc">Description</label>
        <textarea id="desc" name="desc" placeholder="Car Description" style="height:200px; width: 1000px; border-radius: 8px;"></textarea>
        <label for="inputGroupFile01">Photo</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="gambar" style="height: 40px;">
        <label for="status">Payment Status</label>
        <span class="d-flex">
          <input type="radio" name="status" id="lunas" value="Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="lunas" style="margin-top: 15px; margin-right:10px;">paid</label>
          <input type="radio" name="status" id="belum" value="Belum Lunas" style="width: 15px; height: 15px; margin-right:10px;">
          <label for="belum" style="margin-top: 15px;">not yet</label>
        </span>
        <button type="submit" class="btn btn-success" style="margin-top: 40px;">Done</button>
      </form>
    </div>
  </section>
  <!-- Form End -->

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>