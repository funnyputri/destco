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
				<li class="active">Edit Data Produk Jadi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Data Produk Jadi</h1>
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
$sql = " SELECT * FROM produkjadi WHERE kd_pj ='$id'; ";
$ret = pg_query($db, $sql );
if (!$ret) {
    echo pg_last_error($db);
    exit;
}
while ($row = pg_fetch_row($ret)) {
$kd_pj =$row [0];
$nama_pj =$row [1];
$satuan =$row [2];
$hpp =$row [3];
$gbr =$row [4];


}
pg_close($db);
?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Form Edit Data Produk Jadi </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Edit Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Produk Jadi</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
    <form method="POST" action="edit_pros5.php">
    <form class="forms-sample">
        <td>Kode</td>
                <td><Input class="form-control input-lg" type="text" name="kd_pj"
                    value="<?= $kd_pj ?>" readonly> </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><Input class="form-control input-lg" type="text" name="nama_pj"
                    value="<?= $nama_pj?>" > </td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td><Input class="form-control input-lg" type="text" name="satuan"
                    value="<?= $satuan?>" > </td>
            </tr>
            <!--tr>
                <td>Jumlah</td>
                <td><Input class="form-control input-lg" type="text" name="jumlah"
                    value="<?= $jumlah?>" > </td>
            </tr-->
            <tr>
                <td>HPP</td>
                <td><Input class="form-control input-lg" type="text" name="hpp"
                    value="<?= $hpp?>" > </td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><Input class="form-control input-lg" type="text" name="gambar"
                    value="<?= $gbr?>" > </td>
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