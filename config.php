<?php
$mysqli = new mysqli("localhost", "root", "", "db_pinjam_barang");

// Check connection
if ($mysqli->connect_errno) {
    die("Gagal Koneksi: " . $mysqli->connect_error);
}


?>

