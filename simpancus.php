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
				<li class="active">Data Customer</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Customer</h1>
			</div>
		</div><!--/.row-->

        <?php
$id_cus =$_POST ['id_cus'];
$nama =$_POST ['nama'];
$alamat =$_POST ['alamat'];
$nohp =$_POST ['nohp'];


$sql ="INSERT INTO customer (id_cus, nama, alamat, nohp)
Values ('$id_cus','$nama','$alamat','$nohp');" ;
$ret = pg_query($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo "Simpan Data Sukses....<br>";
    echo "Kembali : <a href='cust.php'>Klik</a>";
}
?>
                                <!-- END DATA TABLE-->
                      

                  </div>
                </div>
              </div>
<?php


include_once "footer.php";


?>