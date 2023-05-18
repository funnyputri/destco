<?php
include_once "header.php";
include_once "menu.php";
include_once "koneksi.php";


?>

    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Bahan Baku</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Pembelian </a></li>
                  <li class="breadcrumb-item active" aria-current="page">Pembelian bahan produksi</li>
                </ol>
              </nav>
            </div>
<?php 

$daftar = pg_query ("SELECT bukti FROM biaya_bb ORDER BY bukti DESC");
$kode = pg_fetch_array($daftar);
$kc = ($kode["bukti"]);
$urut = substr ($kc, 8, 10);
$tambah = (int) $urut +1;
 if (strlen($tambah)==1){
     $format = "BKK-AAA/000".$tambah;}
 else if (strlen($tambah)==2){
         $format = "BKK-AAA/00".$tambah;}
 else if (strlen($tambah)==3){
         $format = "BKK-AAA/0".$tambah;}
 else {
         $format = "BKK-AAA/".$tambah;}
    
         
$sql = "SELECT * FROM biaya_bb ORDER BY bukti";
$ret = pg_query($db, $sql);
if(!$ret) {
    echo preg_last_error($db);
    exit;

} ?>
<?php

$sql = "SELECT * FROM bahan_baku ORDER BY kd_bb";
        $data = pg_query($db, $sql);

        $sql2 = "SELECT * FROM suplier ORDER BY kd_sup";
        $ret2 = pg_query($db, $sql2);
        

if (!isset($_SESSION['kode'])) {
    $_SESSION['kode'] = array();
    $_SESSION['nama'] = array();
    $_SESSION['qty'] = array();
    $_SESSION['hrg'] = array();
}

//----------------------------------------------------

if (isset($_POST['pilihan'])) {
    $pilihan = explode(" - ", $_POST['pilihan']);
   
    $kode= $_SESSION['kode'];
    array_push($kode, $pilihan[0]);
    $_SESSION['kode'] = $kode;

    $nama= $_SESSION['nama'];
    array_push($nama, $pilihan[1]);
    $_SESSION['nama'] = $nama;

    $qty= $_SESSION['qty'];
    array_push($qty, $_POST['qty']);
    $_SESSION['qty'] = $qty;

    $hrg= $_SESSION['hrg'];
    array_push($hrg, $pilihan[5]);
    $_SESSION['hrg'] = $hrg; 
}

if (isset($_POST['trx_aksi'])) {
    if ($_POST['trx_aksi'] =="clear") {
        session_unset();
        //unset($_SESSION['item_kode']);
    }
}

if (isset($_GET['trx_aksi'])) {
    if ($_GET['trx_aksi'] =="clear") {
        session_unset();
        //unset($_SESSION['item_kode']);
    }
}
?>
<link href="datepicker.css" rel="stylesheet">
<script src="datepicker.js"></script>
<form method="POST" action="">
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bahan Baku</h4>
                    <p class="card-description"> Pilih Bahan Baku </p>
                    <form class="forms-sample">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">  Kode Produk </label>
                        <div class="col-sm-9">
                        <select name="pilihan" class="form-control" input type="text" >
                         <?php 
                        while($row = pg_fetch_row($data))
                        { echo "<option>".$row[0]. " - "
                            . $row[1].  " - "
                            . $row[2].  " - "
                            . $row[3].  " - "
                            . $row[4].  " - "
                            . $row[5]. "</option>";
                           }?></select></td></tr><br>

                        </div>
                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="qty">
                        </div>
                      </div> 
                      <button type="submit" class="btn btn-gradient-primary me-2">Tambah Keranjang</button>
                        </div>
</form>
                           <table class="table table-responsive" border="3">
    <tr>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Harga Produk</th>
        <th>QTY</th>
        <th>Subtotal</th>
    </tr>
    <?php
    $totaltrx = 0;
    if (isset($_SESSION['kode'])) {
        if (count($_SESSION['kode']) > 0) {
           $nama = $_SESSION['nama'];
           $hrg = $_SESSION['hrg'];
           $qty = $_SESSION['qty'];
           $i = 0;
           foreach ($_SESSION['kode'] as $kode) {
               $subtotal = ((int)$hrg[$i]*(int)$qty[$i]) ;             
               echo "<tr>";
               echo "<td>" . $kode. "</td>
                    <td>"  . $nama[$i]. "</td> 
                    <td>Rp". number_format($hrg[$i]) . "</td> <td>" 
                    . $qty[$i] . "</td> <td>Rp"
                    . number_format($subtotal) . "</td>";
                echo "</tr>";
                $totaltrx = $totaltrx + $subtotal;
                 $i++;
           }
        echo "<a href='trx_kasir.php?trx_aksi=clear'> 
          Clear Transaksi</a>";
        }
    }
    ?>
</table>

<hr>

                      
<h3>Transaksi Pembelian Bahan Produksi</h3>
<form method="POST" action="simpantrxbb.php">
                        <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">No Bukti Pembelian</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name='bukti' value='<?=$format?>' readonly  >
                        </div>
                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> Kode Bahan baku </label>
                        <div class="col-sm-9">
                        <input type='text' class="form-control" name='kd_bb' value='<?=$kode?>' readonly><br>
                        </div>
                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> Supplier </label>
                        <div class="col-sm-9">
                        <select name="kd_sup" class="form-control" input type="text" >
                         <?php 
                        while($row = pg_fetch_row($ret2))
                        { echo "<option value='$row[0]'>". $row[0]. "-". $row[1]. "</option>";
                           }?></select></td></tr><br>

                        </div>
                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">   Total Transaksi Pembelian </label>
                        <div class="col-sm-9">
                        <input type='text' class="form-control" name='total' value='<?=$totaltrx?>' readonly><br>
                        </div>
                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">   Tanggal Pembelian </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="input-tgltrx" name='tanggal' readonly><br>
                        </div>
                      </div> 
                      <button type="submit" class="btn btn-gradient-primary me-2">Simpan Transaksi</button>
</form>
<br><br>
<hr>
<br><br>

<script>
    window.addEventListener("load", function() {
        picker.attach({
            target: "input-tgltrx",
            container: 1
        });

     
    });
    </script>

<?php


include_once "footer.php";


?>