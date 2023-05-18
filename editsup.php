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
				<li class="active">Edit Data Supplier</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Data Supplier</h1>
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
$sql = " SELECT * FROM suplier WHERE kd_sup='$id'; ";
$ret = pg_query($db, $sql );
if (!$ret) {
    echo pg_last_error($db);
    exit;
}
while ($row = pg_fetch_row($ret)) {
$kd_sup =$row [0];
$nama_sup =$row [1];
$nohp =$row [2];
$alamat =$row [3];


}
pg_close($db);
?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Form Edit Data Supplier </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Edit Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Supplier</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
    <form method="POST" action="edit_pros3.php">
    <form class="forms-sample">
        <td>Kode</td>
                <td><Input class="form-control input-lg" type="text" name="kds_sup"
                    value="<?= $kd_sup ?>" readonly> </td>
            </tr>
            <tr>
                <td>Nama Supplier</td>
                <td><Input class="form-control input-lg" type="text" name="nama_sup"
                    value="<?= $nama_sup?>" > </td>
            </tr>
            <tr>
                <td>No Hp</td>
                <td><Input class="form-control input-lg" type="text" name="nohp_sup"
                    value="<?= $nohp?>" > </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><Input class="form-control input-lg" type="text" name="alamat_sup"
                    value="<?= $alamat?>" > </td>
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