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
				<li class="active">Data Permintaan Produksi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Permintaan Produksi</h1>
			</div>
		</div><!--/.row-->

        <?php
$id_cus =$_POST ['tgl'];
$nama =$_POST ['no_produk'];
$alamat =$_POST ['nama'];
$nohp =$_POST ['detail'];
$status =$_POST ['status'];


$sql ="INSERT INTO minta_produk (tgl, no_produk, nama, detail, status)
Values ('$id_cus','$nama','$alamat','$nohp','$status');" ;
$ret = pg_query($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Simpan Data Sukses....<br>";
    echo "Kembali : <a href='permintaan.php'>Klik</a>";
}
/*$tanggal =$_POST ['tgl'];
$nopro =$_POST ['no_produk'];
$nama =$_POST ['nama'];
$detail =$_POST ['detail'];
//$jml =$_POST ['jml'];

$sql ="INSERT INTO minta_produk (tgl, no_produk, nama, detail)
Values ('$tanggal','$nopro','$nama','$detail');" ;
$ret = pg_query($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Simpan Data Sukses....<br>";
    echo "Kembali : <a href='permintaan.php'>Klik</a>";
}*/
?>
                                <!-- END DATA TABLE-->
                      

                  </div>
                </div>
              </div>
<?php


include_once "footer.php";


?>