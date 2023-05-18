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
				<li class="active">Edit Data Customer</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Data Customer</h1>
			</div>
      </div>
      <section class="content">
    <?php

    include_once "koneksi.php";
    
if(!$db) {
    echo "Error : Unable to open database <hr>";
} 
$id_cus =$_POST ['id_cus'];
$nama =$_POST ['nama'];
$alamat =$_POST ['alamat'];
$nohp =$_POST ['nohp'];


$sql = "UPDATE customer SET nama ='$nama',
                      alamat = '$alamat',
                      nohp = '$nohp'
                      
        WHERE id_cus ='$id_cus'; ";
$ret = pg_query ($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Edit Sukses - Klik: <a href='cust.php'>Kembali</a>";
}

pg_close($db);
?>
                                <!-- END DATA TABLE-->