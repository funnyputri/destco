      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Bendahara</span>
                  <span class="text-secondary text-small">Bendahara <?php echo $_SESSION ["login_nama"];?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Data Master</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="bb.php">Daftar Bahan Baku</a></li>
                  <li class="nav-item"> <a class="nav-link" href="bp.php">Daftar Bahan Penolong</a></li>
                  <!--li class="nav-item"> <a class="nav-link" href="detailpj.php">Bahan Baku Produksi</a></li-->
                  <li class="nav-item"> <a class="nav-link" href="produkjd.php">Daftar Produk Jadi</a></li>
                  <li class="nav-item"> <a class="nav-link" href="cust.php">Daftar Customer</a></li>
                  <li class="nav-item"> <a class="nav-link" href="suplier.php">Daftar Supplier</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="permintaan.php">
                <span class="menu-title">Permintaan Produksi</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="persediaan.php">
                <span class="menu-title">Kartu Persediaan</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="beliproduk.php">
                <span class="menu-title">Pembelian Bahan Produksi</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Proses Produksi</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="rbbb.php">Biaya Bahan Buku</a></li>
                  <!--li class="nav-item"> <a class="nav-link" href="index.php"> Biaya Dalam Proses</a></li-->
                  <li class="nav-item"> <a class="nav-link" href="index.php">Biaya Tenaga Kerja Langsung</a></li>
                  <li class="nav-item"> <a class="nav-link" href="index.php">Biaya Overhead</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Keuangan</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-medical-bag menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="jurnal_umum.php">Jurnal Umum</a></li>
                  <li class="nav-item"> <a class="nav-link" href="buku_besar.php"> Buku Besar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="neraca.php">Neraca Saldo</a></li>
                  <li class="nav-item"> <a class="nav-link" href="hpp.php">Laporan HPP</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>