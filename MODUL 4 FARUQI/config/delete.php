<?php
require './conn.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroomead_faruqi WHERE id_mobil = $id";

if (mysqli_query($conn, $sql)) {
  header("location: ../pages/List-Faruqi.php?message=delete");
} else {
  echo "Gagal";
}
