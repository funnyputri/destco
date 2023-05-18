<?php
ob_start();
session_start();
include_once "header.php";
include_once "menu.php";
include_once "koneksi.php";
$nopro = $_GET['nopro'];
?>


<?php

$sql = "SELECT * FROM minta_produk ORDER BY no_produk";
        $data = pg_query($db, $sql);

        $sql2 = "SELECT * FROM produkjadi ORDER BY kd_pj";
        $ret2 = pg_query($db, $sql2);
        

if (!isset($_SESSION['kode'])) {
    $_SESSION['kode'] = array();
    $_SESSION['nama'] = array();
    $_SESSION['qty'] = array();
    $_SESSION['hrg'] = array();
}

//----------------------------------------------------

if (isset($_POST['pilihan'])) {
    $pilihan = explode(" - ", $_POST['pilihan']);
   
    $kode= $_SESSION['kode'];
    array_push($kode, $pilihan[0]);
    $_SESSION['kode'] = $kode;

    $nama= $_SESSION['nama'];
    array_push($nama, $pilihan[1]);
    $_SESSION['nama'] = $nama;

    $qty= $_SESSION['qty'];
    array_push($qty, $_POST['qty']);
    $_SESSION['qty'] = $qty;

    $hrg= $_SESSION['hrg'];
    array_push($hrg, $pilihan[5]);
    $_SESSION['hrg'] = $hrg; 
}
?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Form Add Data Produksi </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Add Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Permintaan produksi</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <form action="simpandp.php" method="POST">
                      <input type="hidden" class="form-control" name="noproduksi" value="<? echo $nopro?>" class readonly >
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kode Produk</label>
                        <div class="col-sm-9">
                          <?php
                            // Mengambil data dari tabel produkjadi
                            $sql = "SELECT * FROM produkjadi";
                            $ret = pg_query($db, $sql);
                            if (!$ret) {
                                echo pg_last_error($db);
                                exit;
                            }
                          ?>
                          <select name="kdproduk" class="form-control" input type="text">
                            <option value="">Pilih Kode Produk</option>
                          <?php
                            while ($row = pg_fetch_row($ret)) {
                                echo "<option value='" . $row[0] . "'>" . $row[0] . "</option>";
                            }
                            pg_close($db);
                          ?>
                        </select>
                        </div>
                      </div>   

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Produk</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nmproduk" >
                      
                        </div>
                      </div>  

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Qty</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="qty"  >
                        </div>
                      </div>  
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="harga"  >
                        </div>
                      </div>  
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Total Harga</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="total"  >
                        </div>
                      </div>  
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                  </form>
                                <!-- END DATA TABLE-->
                      

                  </div>
                </div>
              </div>
<?php


include_once "footer.php";


?>