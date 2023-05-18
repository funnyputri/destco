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
				<li class="active">Data Bahan Baku</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Bahan Baku</h1>
			</div>
		</div><!--/.row-->

        <?php
$kd_bb =$_POST ['kd_bb'];
$nama =$_POST ['nama'];
$satuan =$_POST ['pilihan'];
$jml =$_POST ['jml'];
$minbel =$_POST ['minbel'];
$hrg =$_POST ['harga'];

$sql ="INSERT INTO bahan_baku (kd_bb, nama, satuan, jml, minbel, harga)
Values ('$kd_bb','$nama','$satuan','$jml','$minbel','$hrg');" ;
$ret = pg_query($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Simpan Data Sukses....<br>";
    echo "Kembali : <a href='bb.php'>Klik</a>";
}
?>
                                <!-- END DATA TABLE-->
                      

                  </div>
                </div>
              </div>
<?php


include_once "footer.php";


?>