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
				<li class="active">Edit Bahan Baku Produksi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Bahan Baku Produksi</h1>
			</div>
      </div>
      <section class="content">
    <?php

    include_once "koneksi.php";
    
if(!$db) {
    echo "Error : Unable to open database <hr>";
} 
$kd_bb =$_POST ['kd_bb'];
$jumlah =$_POST ['jumlah'];


$sql = "UPDATE mc002 SET jumlah ='$jumlah'
        WHERE kd_bb ='$kd_bb'; ";
$ret = pg_query ($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Edit Sukses - Klik: <a href='detailpj.php'>Kembali</a>";
}

pg_close($db);
?>
                                <!-- END DATA TABLE-->