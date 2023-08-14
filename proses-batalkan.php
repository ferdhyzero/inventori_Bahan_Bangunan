<?php
    include 'config.php';

    // Mengecek apakah ada permintaan dengan parameter ID yang dikirimkan
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        // Menghapus permintaan berdasarkan ID
        $deleteQuery = "DELETE FROM tbl_request WHERE id='$id'";
        $result = mysqli_query($mysqli, $deleteQuery);

        if($result){
            // Redirect kembali ke halaman data-request.php setelah berhasil membatalkan permintaan
            echo "<script>alert('Permintaan pengembalian barang dibatalkan.');</script>";
            header("location: data-request.php?username=admin");
            exit(); // Hentikan eksekusi skrip setelah melakukan redirect
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }
?>
