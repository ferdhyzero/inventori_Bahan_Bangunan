<?php
$sanksi = array(
    'nama' => 'Sanksi Barang Yang Hilang',
    'deskripsi' => 'Sanksi ini diberlakukan jika seseorang terbukti menghilangkan barang yang menjadi tanggung jawabnya. Tindakan tersebut dianggap melanggar aturan dan dapat merugikan pihak lain.',
    'sanksi' => array(
        'Teguran lisan' => 'Pelaku akan diberi peringatan secara lisan terkait tindakan menghilangkan barang dan dampak negatifnya.',
        'Teguran tertulis' => 'Pelaku akan mendapatkan surat teguran tertulis yang menjelaskan kesalahan yang dilakukan dan konsekuensinya.',
        'Denda' => 'Pelaku harus membayar denda sesuai dengan nilai barang yang hilang. Denda ini bertujuan sebagai pengganti kerugian yang ditimbulkan.',
        'Sanksi disiplin' => 'Pelaku dapat diberikan sanksi disiplin seperti teguran keras, pengurangan tunjangan, atau penurunan pangkat sesuai dengan kebijakan perusahaan atau lembaga terkait.',
        'Tindakan hukum' => 'Jika pelanggaran dianggap serius, pihak berwenang dapat melibatkan proses hukum yang sesuai dengan peraturan yang berlaku. Pelaku dapat dijatuhi sanksi pidana sesuai dengan ketentuan hukum yang berlaku.'
    ),
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Informasi Sanksi</title>
    <link rel="stylesheet" type="text/css" href="tambahan/bootstrap-4.1.3/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="tambahan/bootstrap-4.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/register-style.css">
	<link rel="stylesheet" type="text/css" href="tambahan/font-awesome/css/font-awesome.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<div class="container">
		<div class='row'>
			<div class="col-md-2" style="padding-top: 20px;">
				<a href="index.php" class="btn btn-info btn-icon btn-sm">
					<i class="fa fa-arrow-left"></i>
				</a>
			</div>
			<div class="col-md-8 form-register-container">
                <h2><?php echo $sanksi['nama']; ?></h2>
                <p><?php echo $sanksi['deskripsi']; ?></p>
                <h3>Sanksi yang diberlakukan:</h3>
                    <ul>
                        <?php foreach ($sanksi['sanksi'] as $jenis => $keterangan) : ?>
                            <li><strong><?php echo $jenis; ?>:</strong> <?php echo $keterangan; ?></li>
                        <?php endforeach; ?>
                    </ul>
            </div>
		</div>
	</div>
	<script type="text/javascript" src="tambahan/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="tambahan/bootstrap-4.1.3/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="tambahan/bootstrap-4.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
