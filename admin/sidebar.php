
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel bg-primary">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header bg-primary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Inventori Bahan Bangunan</a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse bg-primary">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Beranda </a>
                    </li>
                
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>Peminjaman</a>
                        <ul class="sub-menu children dropdown-menu bg-primary">
                            <li><i class="menu-icon fa fa-pencil-square"></i><a href="permintaan.php">Permintaan Peminjaman</a></li>
                            <li><i class="menu-icon fa fa-cart-plus"></i><a href="barang-dipinjam.php">Barang Dipinjam</a></li>
                            <li><i class="menu-icon fa fa-check-square"></i><a href="permintaan-kembali.php">Konfirmasi Barang Kembali?</a></li>
                            <li><i class="menu-icon fa fa-calendar-check-o"></i><a href="barang-kembali.php">Barang Kembali</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>Barang</a>
                        <ul class="sub-menu children dropdown-menu bg-primary">
                            <li><i class="menu-icon fa fa-list"></i><a href="data-barang.php">Data Barang</a></li>
                            <li><i class="menu-icon fa fa-plus"></i><a href="tambah-barang.php">Tambah Barang</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user-circle-o"></i>User</a>
                        <ul class="sub-menu children dropdown-menu bg-primary">
                            <li><i class="menu-icon fa fa-user-plus"></i><a href="data-user.php">Data User</a></li>
                            <!--li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Tambah User</a></li-->
                        </ul>
                    </li>

                    <li class="active">
                        <a href="logout.php"> <i class="menu-icon fa fa-sign-out"></i>Logout </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->