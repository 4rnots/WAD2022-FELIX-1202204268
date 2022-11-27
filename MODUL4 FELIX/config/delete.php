<?php
require './conector.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_felix_table WHERE id_mobil = $id";

if (mysqli_query($koneksi, $sql)) {
  header("location: ../pages/ListCar-Felix.php?pesan=hapus");
} else {
  header("location: ../pages/ListCar-Felix.php?pesan=gagal");
}
