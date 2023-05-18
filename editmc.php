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
				<li class="active">Edit Data Bahan Baku</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Data Bahan Baku</h1>
			</div>
		</div><!--/.row-->

        <style>
        label{
            width : 100px !important;
            display :inline-block;
    }
    </style>
    <?php 
    if(!$db) {
        echo "Error : Unable to open database <hr>";
    } 

$id=$_GET['id'];
$sql = " SELECT * FROM mc002 WHERE kd_bb='$id'; ";
$ret = pg_query($db, $sql );
if (!$ret) {
    echo pg_last_error($db);
    exit;
}
while ($row = pg_fetch_row($ret)) {
$kd_bb =$row [0];
$jumlah =$row [1];



}
pg_close($db);
?>
<div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">form edit</h3>
                </div>
                <div class="box-body">
<center>
    <br>
    <form method="POST" action="edit_pros7.php">
        <table width="400">
        <tr>
        <td>Kode</td>
                <td><Input class="form-control input-lg" type="text" name="kd_bb"
                    value="<?= $kd_bb ?>" readonly> </td>
            </tr>
            <tr>
                <td>Jumlah </td>
                <td><Input class="form-control input-lg" type="no" name="jumlah"
                    value="<?= $jumlah?>" > </td>

            </tr>
                <button type="update" class="btn btn-primary">update<i class="fa  fa-upload"></i></button>
            </tr>
        </table>
        </form>
</center>
</section>
<script>
    window.addEventListener("load", function(){
        picker.attach({
            target: "input-tgllhr",
            container: 1
        });
    });
</script>
	
                                <!-- END DATA TABLE-->
                      

                  </div>
                </div>
              </div>
<?php


include_once "footer.php";


?>