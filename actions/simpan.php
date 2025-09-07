<?php
include("../config/koneksi.php");

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

$query = "INSERT INTO siswa (nama, kelas, jurusan) VALUES ('$nama', '$kelas', '$jurusan')";
mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

header("Location: ../pages/daftar.php");
exit();
?>
