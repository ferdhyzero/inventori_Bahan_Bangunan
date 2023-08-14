<?php
    include 'config.php';

    // Mengecek apakah ada permintaan dengan parameter ID yang dikirimkan
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        // Mengambil data pinjaman berdasarkan ID
        $query = mysqli_query($mysqli, "SELECT * FROM tbl_request WHERE id='$id'");
        $data = mysqli_fetch_array($query);

        if($data){
            // Mengurangi jumlah barang yang dipinjam
            $jml_barang = $data['jml_barang'] - 1;

            // Update jumlah barang yang dipinjam
            $updateQuery = "UPDATE tbl_request SET jml_barang='$jml_barang' WHERE id='$id'";
            $result = mysqli_query($mysqli, $updateQuery);

            if($result){
                echo "Jumlah barang berhasil dikurangi.";
            } else {
                echo "Error: " . mysqli_error($mysqli);
            }
        } else {
            echo "Data pinjaman tidak ditemukan.";
        }
    } else {
        echo "ID tidak ditemukan.";
    }
?>
