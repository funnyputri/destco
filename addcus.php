<?php
  include_once "header.php";
  include_once "menu.php";
  include_once "koneksi.php";
  $daftar = pg_query ("SELECT id_cus FROM customer ORDER BY id_cus DESC");
  $kdpel = pg_fetch_array($daftar);
  $kc = $kdpel ['id_cus'];
  $urut = substr ($kc, 8, 10);
  $tambah = (int) $urut +1;
   if (strlen($tambah)==1){
       $format = "CUS-AAA/000".$tambah;}
   else if (strlen($tambah)==2){
           $format = "CUS-AAA/00".$tambah;}
   else if (strlen($tambah)==3){
           $format = "CUS-AAA/0".$tambah;}
   else {
           $format = "CUS-AAA/".$tambah;}
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Form Add Data Customer </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Add Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Customer</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <form action="simpancus.php" method="POST">
                    <form class="forms-sample">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kode</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="id_cus" value="<?=$format?>" class readonly >
                        </div>
                      </div>   

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Customer</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nama"  >
                        </div>
                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="alamat"  >
                        </div>
                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">No Hp</label>
                        <div class="col-sm-9">
                          <input type="no" class="form-control" name="nohp"  >
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