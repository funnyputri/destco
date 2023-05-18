<?php
  include_once "header.php";
  include_once "menu.php";
  include_once "koneksi.php";
  $daftar = pg_query ("SELECT kode_bp FROM bahanpen ORDER BY kode_bp DESC");
  $kdpel = pg_fetch_array($daftar);
  $kc = $kdpel ['kode_bp'];
  $urut = substr ($kc, 8, 10);
  $tambah = (int) $urut +1;
   if (strlen($tambah)==1){
       $format = "BP-AAA/000".$tambah;}
   else if (strlen($tambah)==2){
           $format = "BP-AAA/00".$tambah;}
   else if (strlen($tambah)==3){
           $format = "BP-AAA/0".$tambah;}
   else {
           $format = "BP-AAA/".$tambah;}
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Form Add Data Bahan Penolong </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Add Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Bahan Penolong</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <form action="simpanbp.php" method="POST">
                  <form class="forms-sample">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kode</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="kode_bp" value="<?=$format?>" class readonly >
                        </div>
                      </div>   
                       
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Bahan Penolong</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nama_bp" >
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