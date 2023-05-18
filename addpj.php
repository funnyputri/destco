<?php
  include_once "header.php";
  include_once "menu.php";
  include_once "koneksi.php";
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Form Add Data Produk Jadi </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Add Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Produk Jadi</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <form action="simpanpj.php" method="POST">
                    <form class="forms-sample">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kode</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="kd_pj" >
                        </div>
                      </div>   

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nama_pj"  >
                        </div>
                      </div>   

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Satuan</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="satuan"  >
                        </div>
                      </div>  

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Hpp</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="hpp"  >
                        </div>
                      </div>  
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Gambar</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="gambar"  >
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