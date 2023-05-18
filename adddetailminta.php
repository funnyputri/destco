<?php
ob_start();
session_start();
  include_once "header.php";
  include_once "menu.php";
  include_once "koneksi.php";
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
                    <form class="forms-sample">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">No Produksi</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="no_produk" value="<?=$format?>" class readonly ></div></div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kode Produk</label>
                        <div class="col-sm-9">
                          <select name="pilihan" class="form-control" input type="text"> 
                          <option> DC-002 </option>
                          <option> MC-002 </option>
                          <option> TC-001 </option>
                          <option> WCA-001 </option>
                          <option> CG-001 </option>
                          <option> BC-001 </option>
                          <option> MCA-002 </option>
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