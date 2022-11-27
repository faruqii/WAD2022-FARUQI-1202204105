<?php
$conn = new mysqli("localhost", "root", "", "modul3");
$connuser = new mysqli("localhost", "root", "", "wad_modul4_faruqi");

if (!$conn) {
  die("Koneksi Gagal: " . $conn->connect_error);
}
