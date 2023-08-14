<?php
	include '../config.php';
	if(isset($_GET['mode']) && !empty($_GET['mode'])){
		$id = $_GET['id'];
		$search_request 	 = mysqli_query($mysqli,"SELECT * FROM tbl_request WHERE id='$id'");
		$data_request		 = mysqli_fetch_array($search_request);
		$id_request  	 	 = $data_request['id'];
		$nama_barang_request = $data_request['nama_barang'];
		$peminjam_request 	 = $data_request['peminjam'];
		$level_request		 = $data_request['level'];
		$jml_barang_request  = $data_request['jml_barang'];
		$tgl_pinjam_request  = $data_request['tgl_pinjam'];
		$tgl_kembali_request = $data_request['tgl_kembali'];
		
		if($_GET['mode'] == "terima"){
			$query_search_barang = mysqli_query($mysqli, "SELECT * FROM tbl_barang WHERE nama_barang = '$nama_barang_request'");
			$data_search_barang  = mysqli_fetch_array($query_search_barang);
			$stok_barang 		 = $data_search_barang['stok_barang'] - $jml_barang_request;
			if($data_search_barang){
				$update_stok = mysqli_query($mysqli, "UPDATE tbl_barang SET stok_barang = '$stok_barang' WHERE nama_barang = '$nama_barang_request'");
				if($update_stok){
					if(mysqli_query($mysqli,"INSERT INTO tbl_pinjam (nama_barang, peminjam, level, jml_barang, tgl_pinjam, tgl_kembali) VALUES ('$nama_barang_request', '$peminjam_request', '$level_request', '$jml_barang_request', '$tgl_pinjam_request', '$tgl_kembali_request')")){
						if(mysqli_query($mysqli,"DELETE FROM tbl_request WHERE id = '$id_request'")){
							$konten = "Permintaan Peminjaman Barang Anda Telah di Terima. ".$jml_barang_request." buah ".$nama_barang_request.". Username: ".$peminjam_request.". Silahkan ke bagian Sarpras untuk mengampil barang";
							if(mysqli_query($mysqli,"INSERT INTO pemberitahuan (username, konten, status) VALUES ('$peminjam_request', '$konten', 'terima')")){
								echo "<script>alert('Berhasil Menerima Permintaan');</script>";
								echo "<script>window.history.back();</script>";
							}else{
								echo "Gagal Menambah Pemberitahuan";
							}						
						}else{
							echo "Gagal Menghapus dari tbl_request";
						}
					}else{
						echo "Gagal menambah ke tbl_pinjam";
					}
				}else{
					echo "Tidak bisa update data barang";
				}
			}else{
				echo "tidak bisa mencari barang";
			}

		}else if($_GET['mode'] == "tolak"){
			if(mysqli_query($mysqli,"DELETE FROM tbl_request WHERE id = '$id_request'")){
				$konten = "Maaf! Permintaan Peminjaman Barang Anda di Tolak. ".$jml_barang_request." buah ".$nama_barang_request.". Username: ".$peminjam_request;
				if(mysqli_query($mysqli,"INSERT INTO pemberitahuan (username, konten, status) VALUES ('$peminjam_request', '$konten', 'tolak')")){
					echo "<script>alert('Berhasil Menolak Permintaan');</script>";
					echo "<script>window.history.back();</script>";
				}else{
					echo "Gagal Menambah Pemberitahuan";
				}			
			}else{
				echo "Gagal Menghapus dari tbl_request";
			}
			
		}
	}
?>