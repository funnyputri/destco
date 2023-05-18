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
				<li class="active">Daftar Produk Jadi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Daftar Produk Jadi</h1>
			</div>
		</div><!--/.row-->

        <?php
$kd_pj =$_POST ['kd_pj'];
$nama =$_POST ['nama_pj'];
$satuan =$_POST ['satuan'];
$hpp =$_POST ['hpp'];
$gbr =$_POST ['gambar'];


$sql ="INSERT INTO produkjadi (kd_pj, nama_pj, satuan, hpp, gambar)
Values ('$kd_pj','$nama','$satuan','$hpp','$gbr');" ;
$ret = pg_query($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Simpan Data Sukses....<br>";
    echo "Kembali : <a href='produkjd.php'>Klik</a>";
}
?>
                                <!-- END DATA TABLE-->
                      

                  </div>
                </div>
              </div>
<?php


include_once "footer.php";


?>