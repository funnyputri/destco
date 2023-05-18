<?php
  include_once "header.php";
  include_once "menu.php";
  include ("koneksi.php");
  ?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Data Bahan Baku</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Data Bahan Baku</h1>
			</div>
      </div>
      <section class="content">
    <?php

    include_once "koneksi.php";
    
if(!$db) {
    echo "Error : Unable to open database <hr>";
} 
$kd_bb =$_POST ['kd_bb'];
$nama =$_POST ['nama'];
$satuan =$_POST ['satuan'];
$jml =$_POST ['jml'];
$minbel =$_POST ['minbel'];
$hrg =$_POST ['harga'];


$sql = "UPDATE bahan_baku SET nama ='$nama',
                          satuan = '$satuan',
                          jml = '$jml',
                          minbel = '$minbel',
                          harga = '$hrg'
        WHERE kd_bb ='$kd_bb'; ";
$ret = pg_query ($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Edit Sukses - Klik: <a href='bb.php'>Kembali</a>";
}

pg_close($db);
?>
                                <!-- END DATA TABLE-->