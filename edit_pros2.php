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
				<li class="active">Edit Data Bahan Penolong</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Data Bahan Penolong</h1>
			</div>
      </div>
      <section class="content">
    <?php

    include_once "koneksi.php";
    
if(!$db) {
    echo "Error : Unable to open database <hr>";
} 
$kd_bp =$_POST ['kode_bp'];
$nama_bahan =$_POST ['nama_bp'];



$sql = "UPDATE bahanpen SET nama_bp ='$nama_bahan'
        WHERE kode_bp ='$kd_bp'; ";
$ret = pg_query ($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Edit Sukses - Klik: <a href='bp.php'>Kembali</a>";
}

pg_close($db);
?>
                                <!-- END DATA TABLE-->