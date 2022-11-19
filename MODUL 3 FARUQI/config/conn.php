<?php
$conn = new mysqli("localhost", "root", "", "modul3");

if (!$conn) {
  die("Koneksi Gagal: " . $conn->connect_error);
}
