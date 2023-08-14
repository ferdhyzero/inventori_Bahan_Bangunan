<?php
    include '../config.php';

    // Mengecek apakah ID transaksi telah dikirim melalui metode POST
    if(isset($_POST['id_transaksi'])){
        $id_transaksi = $_POST['id_transaksi'];

        // Menghapus data transaksi berdasarkan ID transaksi
        $hapus = mysqli_query($mysqli, "DELETE FROM tbl_transaksi WHERE id = '$id_transaksi'");

        if($hapus){
            // Jika berhasil dihapus, redirect ke halaman transaksi
            header('Location: barang-kembali.php');
        } else {
            // Jika terjadi kesalahan saat menghapus, tampilkan pesan error
            echo "Error: " . mysqli_error($mysqli);
        }
    } else {
        // Jika ID transaksi tidak tersedia, redirect ke halaman transaksi
        header('Location: barang-kembali.php');
    }
?>
