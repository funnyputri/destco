<?php
  include_once "header.php";
  include_once "menu.php";
  include_once "koneksi.php";
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Form Add Data Produk Jadi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Form Add Data Produk Jadi</h1>
			</div>
		</div><!--/.row-->

        <style>
        label{
            width : 150px !important;
            display :inline-block;
    }
    </style>
<form action="simpanpj.php" method="POST">
<tr>

    <label>Kode</label><input type="text" size="25" name="kd_pj"  /><br>
    <label>Nama</label><input type="text" size="25" name="nama_pj" /><br>
    <label>Satuan</label><input type="text" size="25" name="satuan" /><br>
    <label>Hpp</label><input type="text" size="25" name="hpp" /><br>
    <label>Gambar</label><input type="text" size="25" name="gambar" /><br>
    <label></label> <button> SUBMIT</button>
</form>
                                <!-- END DATA TABLE-->
                      

                  </div>
                </div>
              </div>
<?php


include_once "footer.php";


?>