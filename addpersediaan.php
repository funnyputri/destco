<?php
  include_once "header.php";
  include_once "menu.php";
  include_once "koneksi.php";
  $daftar = pg_query ("SELECT kd_bb FROM bahan_baku ORDER BY kd_bb DESC");
  $kdpel = pg_fetch_array($daftar);
  $kc = $kdpel ['kd_bb'];
  $urut = substr ($kc, 8, 10);
  $tambah = (int) $urut +1;
   if (strlen($tambah)==1){
       $format = "BB-AAA/000".$tambah;}
   else if (strlen($tambah)==2){
           $format = "BB-AAA/00".$tambah;}
   else if (strlen($tambah)==3){
           $format = "BB-AAA/0".$tambah;}
   else {
           $format = "BB-AAA/".$tambah;}
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Form Add Data Bahan Baku</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Form Add Data Bahan Baku</h1>
			</div>
		</div><!--/.row-->

        <style>
        label{
            width : 150px !important;
            display :inline-block;
    }
    </style>
<form action="simpanbb.php" method="POST">
<tr>

    <label>Kode</label><input type="text" size="25" name="kd_bb" value="<?=$format?>" class readonly /><br>
    <label>Nama</label><input type="text" size="25" name="nama" /><br>
    <table><tr><td><label>Satuan</label><td><select name="pilihan" class="form-control" input type="text"> 
                <option> gram </option>
                <option> ml </option>
                <option> box </option>
                        </select></tr></table>
    <label>Jumlah</label><input type="text" size="25" name="jml" /><br>
    <label>Minimum Belanja</label><input type="text" size="25" name="minbel" /><br>
    <label>Harga</label><input type="text" size="25" name="harga" /><br>
    <label></label> <button> SUBMIT</button>
</form>
                                <!-- END DATA TABLE-->
                      

                  </div>
                </div>
              </div>
<?php


include_once "footer.php";


?>