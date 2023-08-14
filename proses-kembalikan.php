<?php
    include 'config.php';

    if(isset($_GET['id']) && isset($_POST['jml_kembali'])){
        $id_pinjam = $_GET['id'];
        $jml_kembali = $_POST['jml_kembali'];

        // Mengambil data pinjaman berdasarkan ID
        $query_pinjam = mysqli_query($mysqli, "SELECT * FROM tbl_pinjam WHERE id='$id_pinjam'");
        $data_pinjam = mysqli_fetch_array($query_pinjam);

        if($data_pinjam){
            $nama_barang = $data_pinjam['nama_barang'];
            $peminjam = $data_pinjam['peminjam'];
            $level = $data_pinjam['level'];
            $jml_barang = $data_pinjam['jml_barang'];
            $tgl_pinjam = $data_pinjam['tgl_pinjam'];
            $tgl_kembali = $data_pinjam['tgl_kembali'];

            if($jml_kembali <= $jml_barang){
                // Mengurangi jumlah barang yang dikembalikan
                $jml_barang_kembali = $jml_barang - $jml_kembali;

                if($jml_barang_kembali < 1) {
                    // Menghapus data pinjaman jika jumlah barang yang dikembalikan kurang dari 1
                    $deleteQuery = "DELETE FROM tbl_pinjam WHERE id='$id_pinjam'";
                    $deleteResult = mysqli_query($mysqli, $deleteQuery);

                    if(!$deleteResult){
                        echo "Error: " . mysqli_error($mysqli);
                        exit();
                    }
                } else {
                    // Update jumlah barang yang dikembalikan
                    $updateQuery = "UPDATE tbl_pinjam SET jml_barang='$jml_barang_kembali' WHERE id='$id_pinjam'";
                    $updateResult = mysqli_query($mysqli, $updateQuery);

                    if(!$updateResult){
                        echo "Error: " . mysqli_error($mysqli);
                        exit();
                    }
                }

                // Insert data ke tabel tbl_req_kembali
                $insertQuery = "INSERT INTO tbl_req_kembali (nama_barang, peminjam, level, jml_barang, tgl_pinjam, tgl_kembali) VALUES ('$nama_barang', '$peminjam', '$level', '$jml_kembali', '$tgl_pinjam', '$tgl_kembali')";
                $insertResult = mysqli_query($mysqli, $insertQuery);

                if($insertResult){
                    echo "<script>alert('Barang berhasil dikembalikan.');</script>";
                    header("location: barang-dipinjam.php?username=$peminjam");
                    exit();
                } else {
                    echo "Error: " . mysqli_error($mysqli);
                }
            } else {
                echo "Jumlah barang yang dikembalikan melebihi jumlah barang yang dipinjam.";
            }
        } else {
            echo "Data pinjaman tidak ditemukan.";
        }
    } else {
        echo "ID atau jumlah barang yang dikembalikan tidak ditemukan.";
    }
?>
