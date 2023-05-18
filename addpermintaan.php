<?php
  include_once "header.php";
  include_once "menu.php";
  include_once "koneksi.php";
 
?>

<?php 

$daftar = pg_query ("SELECT no_produk FROM minta_produk ORDER BY no_produk DESC");
$kode = pg_fetch_array($daftar);
$kc = $kode['no_produk'];
$urut = substr ($kc, 8, 10);
$tambah = (int) $urut +1;
 if (strlen($tambah)==1){
     $format = "NP-AAA/000".$tambah;}
 else if (strlen($tambah)==2){
         $format = "NP-AAA/00".$tambah;}
 else if (strlen($tambah)==3){
         $format = "NP-AAA/0".$tambah;}
 else {
         $format = "NP-AAA/".$tambah;}

 ?>

<?php

$sql = "SELECT * FROM produkjadi ORDER BY kd_pj";
        $data = pg_query($db, $sql);

        $sql2 = "SELECT * FROM suplier ORDER BY kd_sup";
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
<link href="datepicker.css" rel="stylesheet">
<script src="datepicker.js"></script>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Form Permintaan Produksi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Form Permintaan Produksi</h1>
			</div>
		</div><!--/.row-->

        <style>
        label{
            width : 150px !important;
            display :inline-block;
    }
    </style>
<form action="simpanpm.php" method="POST">
<tr>

    <div class="form-group row">
        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">  Tanggal Permintaan </label>
        <div class="col-sm-4">
        <input type="text" class="form-control" id="input-tgltrx" name='tgl' readonly><br></div>
    <div class="form-group row">
        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">No Produksi</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="no_produk" value="<?=$format?>" class readonly ></div></div>
                       
        <form class="forms-sample">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">  Produk </label>
                        <div class="col-sm-4">
                        <select name="pilihan" class="form-control" input type="text" >
                         <?php 
                        while($row = pg_fetch_row($data))
                        { echo "<option>".$row[0].  "</option>";
                           }?></select></td></tr><br>

                        </div>
                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="qty">
                        </div>
                      </div> 
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
</form>
                                <!-- END DATA TABLE-->
                      

                  </div>
                </div>
              </div>

<script>
    window.addEventListener("load", function() {
        picker.attach({
            target: "input-tgltrx",
            container: 1
        });

     
    });
    </script>

<?php


include_once "footer.php";


?>