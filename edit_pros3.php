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
				<li class="active">Edit Data Supplier</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Data Supplier</h1>
			</div>
      </div>
      <section class="content">
    <?php

    include_once "koneksi.php";
    
if(!$db) {
    echo "Error : Unable to open database <hr>";
} 
$kd_sup =$_POST ['kd_sup'];
$nama_sup =$_POST ['nama_sup'];
$nohp =$_POST ['nohp_sup'];
$alamat =$_POST ['alamat_sup'];

$sql = "UPDATE suplier SET nama_sup ='$nama_sup',
                      nohp_sup = '$nohp',
                      alamat_sup = '$alamat'
        WHERE kd_sup ='$kd_sup'; ";
$ret = pg_query ($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Edit Sukses - Klik: <a href='suplier.php'>Kembali</a>";
}

pg_close($db);
?>
                                <!-- END DATA TABLE-->