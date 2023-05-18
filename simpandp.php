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
				<li class="active">Detail Produksi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Detail Produksi</h1>
			</div>
		</div><!--/.row-->

        <?php
$nopro =$_POST ['noproduksi'];
$kdpro =$_POST ['kdproduk'];
$nama =$_POST ['nmproduk'];
$hrg =$_POST ['harga'];
$tot =$_POST ['total'];


$sql ="INSERT INTO detailproduksi (noproduksi, kdproduk, nmproduk, harga, total)
Values ('$nopro','$kdpro','$nama','$hrg','$tot');" ;
$ret = pg_query($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Simpan Data Sukses....<br>";
    echo "Kembali : <a href='detailproduksi.php'>Klik</a>";
}
?>
                                <!-- END DATA TABLE-->
                      

                  </div>
                </div>
              </div>
<?php


include_once "footer.php";


?>