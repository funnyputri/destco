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
				<li class="active">Edit Daftar Produk Jadi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Daftar Produk Jadi</h1>
			</div>
      </div>
      <section class="content">
    <?php

    include_once "koneksi.php";
    
if(!$db) {
    echo "Error : Unable to open database <hr>";
} 
$kd_pj =$_POST ['kd_pj'];
$nama_pj =$_POST ['nama_pj'];
$satuan =$_POST ['satuan'];
$hpp =$_POST ['hpp'];
$gbr =$_POST ['gambar'];

$sql = "UPDATE produkjadi SET nama_pj ='$nama_pj',
                      satuan = '$satuan',
                      hpp = '$hpp',
                      gambar = '$gbr'
        WHERE kd_pj ='$kd_pj'; ";
$ret = pg_query ($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Edit Sukses - Klik: <a href='produkjd.php'>Kembali</a>";
}

pg_close($db);
?>
                                <!-- END DATA TABLE-->