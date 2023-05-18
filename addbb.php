<?php
  include_once "header.php";
  include_once "menu.php";
  include_once "koneksi.php";
  $daftar = pg_query ("SELECT kd_bb FROM bahan_baku ORDER BY kd_bb DESC");
  $kdpel = pg_fetch_array($daftar);
  $kc = $kdpel ['kd_bb'];
  $urut = substr ($kc, 8, 10);
  $tambah = (int) $urut +1;
   if (strlen($tambah)==1){
       $format = "BB-AAA/000".$tambah;}
   else if (strlen($tambah)==2){
           $format = "BB-AAA/00".$tambah;}
   else if (strlen($tambah)==3){
           $format = "BB-AAA/0".$tambah;}
   else {
           $format = "BB-AAA/".$tambah;}
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Form Add Data Bahan Baku </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Add Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Bahan Baku</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <form action="simpanbb.php" method="POST">
                    <form class="forms-sample">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kode</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="kd_bb" value="<?=$format?>" class readonly >
                        </div>
                      </div>   

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nama_bb"  >
                        </div>
                      </div>   

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Satuan</label>
                        <div class="col-sm-9">
                        <select name="pilihan" class="form-control" input type="text"> 
                          <option> gram </option>
                          <option> ml </option>
                          <option> box </option>
                        </select>
                        </div>
                      </div>   

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="jml"  >
                        </div>
                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Minimum Belanja</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="minbel"  >
                        </div>
                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="harga" >
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