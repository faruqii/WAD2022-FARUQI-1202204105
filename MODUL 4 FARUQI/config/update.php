<?php
require './conn.php';

$id = $_GET['id'];
$carname = $_POST['nama'];
$owner = $_POST['pemilik'];
$brand = $_POST['merk'];
$date = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];
$photo = $_FILES['gambar']['name'];

$target = "../asset/images/";

if ("SELECT foto_mobil FROM showroomead_faruqi WHERE id_mobil = $id" != 0) {
  if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $photo)) {
    $editquery = "UPDATE showroomead_faruqi SET nama_mobil = '$carname', pemilik_mobil = '$owner', merk_mobil = '$brand', tanggal_beli = '$date', deskripsi = '$desc', foto_mobil = '$photo', status_pembayaran = '$status' WHERE id_mobil = $id";
    if (mysqli_query($conn, $editquery)) {
      header("location: ../pages/List-Faruqi.php?message=update");
    } else {
      header("location: ../pages/List-Faruqi.php?message=failed");
    }
  } else {
    header("location: ../pages/List-Faruqi.php?message=failed");
  }
} else {
  $editquery = "UPDATE showroomead_faruqi SET nama_mobil = '$carname', pemilik_mobil = '$owner', merk_mobil = '$brand', tanggal_beli = '$date', deskripsi = '$desc', status_pembayaran = '$status' WHERE id_mobil = $id";
  if (mysqli_query($conn, $editquery)) {
    header("location: ../pages/List-Faruqi.php?message=update");
  } else {
    header("location: ../pages/List-Faruqi.php?message=failed");
  }
}
