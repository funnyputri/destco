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
$sql = " SELECT * FROM bahan_baku WHERE kd_bb='$id'; ";
$ret = pg_query($db, $sql );
if (!$ret) {
    echo pg_last_error($db);
    exit;
}
while ($row = pg_fetch_row($ret)) {
$kd_bb =$row [0];
$nama =$row [1];
$satuan =$row [2];
$jml =$row [3];
$minbel =$row [4];
$hrg =$row [5];


}
pg_close($db);
?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Form Edit Data Bahan Baku </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Edit Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Bahan Baku</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
    <form method="POST" action="edit_pros1.php">
    <form class="forms-sample">
                    
        <td>Kode</td>
                <td><Input class="form-control input-lg" type="text" name="kd_bb"
                    value="<?= $kd_bb ?>" readonly> </td>
            </tr>
            <tr>
                <td>Nama </td>
                <td><Input class="form-control input-lg" type="text" name="nama"
                    value="<?= $nama?>" > </td>
            </tr>
            <td>Satuan</td>
                <td><Input class="form-control input-lg" type="text" name="satuan"
                    value="<?= $satuan ?>" > </td>
            </tr>
            <td>Jumlah</td>
                <td><Input class="form-control input-lg" type="text" name="jml"
                    value="<?= $jml ?>" > </td>
            </tr>
            <td>Minimum Belanja</td>
                <td><Input class="form-control input-lg" type="text" name="minbel"
                    value="<?= $minbel ?>" > </td>
            </tr>
            <td>Harga</td>
                <td><Input class="form-control input-lg" type="text" name="harga"
                    value="<?= $hrg ?>" > </td>
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