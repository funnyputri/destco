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
				<li class="active">Hapus Data Supplier</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Hapus Data Supplier</h1>
			</div>
		</div><!--/.row-->

        <?php


$id = $_GET ['id'];


$sql = "DELETE FROM suplier WHERE kd_sup ='$id';";
                        
$ret = pg_query($db, $sql);
if (!$ret) {
    echo pg_last_error($db);
    exit;
} else {
    echo " Hapus Data Sukses .. <br>";
    echo " Kembali : <a href='suplier.php'>Kembali</a> ";
}
?>
                                <!-- END DATA TABLE-->
                      

                  </div>
                </div>
              </div>
<?php


include_once "footer.php";


?>