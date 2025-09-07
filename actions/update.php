<?php
include("../config/koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id='$id'")
    or die(mysqli_error($koneksi));

header("Location: ../pages/daftar.php");
exit();
?>
