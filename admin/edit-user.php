<?php
	session_start();
	include '../config.php';
	if(isset($_POST['edit-user'])){
        $nama       = $_POST['nama'];
        $username   = $_POST['username'];
        $level      = $_POST['level'];
        $id 	    = $_POST['id'];

        if(mysqli_query($mysqli, "UPDATE user SET nama='$nama', username='$username', level='$level' WHERE id='$id'")){
            echo "<script>alert('Berhasil Disimpan');</script>";
            echo "<script>window.location('index.php');</script>";
        } else {
            echo "<script>alert('Gagal Edit ke Database');</script>";
        }
    }

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$query = mysqli_query($mysqli,"SELECT * FROM user WHERE id='$id'");
		$data  = mysqli_fetch_array($query);
		$nama       = $data['nama'];
		$username   = $data['username'];
		$level      = $data['level'];
	}
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin - Edit User</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <?php
        include 'sidebar.php';
    ?>
    <div id="right-panel" class="right-panel">
        <?php
            include 'header.php'; 
        ?>
        <div class="breadcrumbs">
            <div class="col-sm-6">
                <div class="page-header float-left">
                    <div class="page-title" style="padding: 20px 0;">
                        <h1 style="display: unset;">Edit Data User</h1>
                        <a href="data-user.php" class="btn btn-info btn-sm" style="margin-left: 20px;">
                            <i class="fa fa-arrow-left"></i>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#">User</a></li>
                            <li class="active">Edit Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div class="card">
                          <div class="card-header"><strong>Edit Data User</strong></div>
                          <form class="card-body card-block" action="" method="POST">
                          	<input type="hidden" name="id" value="<?php echo$id;?>">
                            <div class="form-group">
                                <label for="nama" class=" form-control-label">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $nama;?>"> 
                            </div>
                            <div class="form-group">
                                <label for="username" class=" form-control-label">Username</label>
                                <input type="text" id="username" name="username" class="form-control" value="<?php echo $username;?>"> 
                            </div>
                            <div class="form-group">
                                <label for="level" class=" form-control-label">Level</label>
                                <input type="text" id="level" name="level" class="form-control" value="<?php echo $level;?>"> 
                            </div>
                            <button type="submit" class="btn btn-success" name="edit-user">
                                <i class="fa fa-check"></i>
                                Simpan
                            </button>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>

<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
