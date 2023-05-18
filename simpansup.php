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
				<li class="active">Data Supplier</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Supplier</h1>
			</div>
		</div><!--/.row-->

        <?php
$kd_sup =$_POST ['kd_sup'];
$nama_sup =$_POST ['nama_sup'];
$nohp =$_POST ['nohp_sup'];
$alamat =$_POST ['alamat_sup'];


$sql ="INSERT INTO suplier (kd_sup, nama_sup, nohp_sup, alamat_sup)
Values ('$kd_sup','$nama_sup','$nohp','$alamat');" ;
$ret = pg_query($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Simpan Data Sukses....<br>";
    echo "Kembali : <a href='suplier.php'>Klik</a>";
}
?>
                                <!-- END DATA TABLE-->
                      

                  </div>
                </div>
              </div>
<?php


include_once "footer.php";


?>