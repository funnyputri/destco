<?php
include_once "header.php";
include_once "menu.php";
include_once "koneksi.php";


?>

    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Detail Produk</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Detail Produk </a></li>
                  <li class="breadcrumb-item active" aria-current="page">Permintaan produksi</li>
                </ol>
              </nav>
            </div>

<?php

$sql = "SELECT * FROM produkjadi ORDER BY kd_pj";
        $data = pg_query($db, $sql);

        $sql2 = "SELECT * FROM minta_produk ORDER BY no_produk";
        $ret2 = pg_query($db, $sql2);

if (!isset($_SESSION['no_produksi'])) {
    $_SESSION['no_produksi'] = array();
    $_SESSION['kd_pj'] = array();
    $_SESSION['qty'] = array();
    $_SESSION['harga'] = array();
}

//----------------------------------------------------

if (isset($_POST['pilihan'])) {
    $pilihan = explode(" - ", $_POST['pilihan']);
   
    $nopro= $_SESSION['no_produksi'];
    array_push($nopro, $pilihan[1]);
    $_SESSION['no_produksi'] = $nopro;

    $kode= $_SESSION['kd_pj'];
    array_push($kode, $pilihan[1]);
    $_SESSION['kd_pj'] = $kode;

    $qty= $_SESSION['qty'];
    array_push($qty, $_POST['qty']);
    $_SESSION['qty'] = $qty;

    $hrg= $_SESSION['harga'];
    array_push($hrg, $pilihan[5]);
    $_SESSION['harga'] = $hrg; 
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
<form method="POST" action="">
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Detail Produk</h4>
                    <form class="forms-sample">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">  No Produksi </label>
                        <div class="col-sm-7">
                        <select name="pilihan" class="form-control" input type="text" >
                         <?php 
                        while($row = pg_fetch_row($ret2))
                        { echo "<option>".$row[1].  "</option>";
                           }?></select></td></tr><br>

                        </div>
                      </div> 
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">   Kode Produk </label>
                        <div class="col-sm-7">
                        <select name="pilihan" class="form-control" input type="text" >
                         <?php 
                        while($row = pg_fetch_row($data))
                        { echo "<option>".$row[0].  "</option>";
                           }?></select></td></tr><br>

                        </div>
                      </div> 

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" name="qty">
                        </div>
                      </div> 
                      <button type="submit" class="btn btn-gradient-primary me-2">Cek Detail</button>
                        </div>
</form>
                           <table class="table table-responsive" border="3">
    <tr>
        <th>No Produksi</th>
        <th>Kode Produk</th>
        <th>Qty</th>
        <th>Harga</th>
        <th>Total</th>
    </tr>
    <?php
    $totaltrx = 0;
    if (isset($_SESSION['no_produksi'])) {
        if (count($_SESSION['no_produksi']) > 0) {
           $kode = $_SESSION['kd_pj'];
           $qty = $_SESSION['qty'];
           $hrg = $_SESSION['harga'];
           $i = 0;
           foreach ($_SESSION['no_produksi'] as $nopro) {
               $total = ((int)$hrg[$i]*(int)$qty[$i]) ;             
               echo "<tr>";
               echo "<td>" . $nopro. "</td>
                    <td>"  . $kode[$i]. "</td> 
                    <td>Rp". number_format($hrg[$i]) . "</td> <td>" 
                    . $qty[$i] . "</td> <td>Rp"
                    . number_format($total) . "</td>";
                echo "</tr>";
                $totaltrx = $totaltrx + $total;
                 $i++;
           }
        echo "<a href='trx_kasir.php?trx_aksi=clear'> 
          Clear Transaksi</a>";
        }
    }
    ?>
</table>



<?php


include_once "footer.php";


?>