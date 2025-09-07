<?php
$koneksi = mysqli_connect("localhost", "Damorh", "@S7Ah!D318!!.", "lkpd5-paksincung", 3306);
if (!$koneksi) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}
?>