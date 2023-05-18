<?php
include_once "header.php";
include_once "menu.php";
include ("koneksi.php");
$id=$_GET['id'];
$nm=$_GET['nama'];
$sql = "SELECT * FROM produkjadi ORDER BY kd_pj";
        $data = pg_query($db, $sql);
        

?>

                  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Detail Produk</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"></a></li>
                  <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                     <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4"><?php echo "$id $nm" ;?></h6>
                            <form method="POST" action="permintaan.php">
                            <td style="width:25pc;">
                              <tr>  
                       <select name="pilihan" class="form-control" input type="text"> 
                          <?php
                          while ($row = pg_fetch_row($data)) {
                         echo "<option>" . $row[0] . '</option>';
                        }
                        ?></select><br></td>
                        <td style="width:25pc;"><input type="text" class="form-control" name="jumlah"
                        placeholder="Masukan Jumlah"></td>
                        <input type="hidden" class="form-control" name="produk" value="<?php echo $id; ?>">
                        <td style="padding-left:10px;"><button id="tombol-simpan" class="btn btn-dark"></i> Tambah</button>
                        </form>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" >No Produksi </th>
                                        <th scope="col">Kode Produk</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Total Harga</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    <?php
    $totaltrx = 0;
    if (isset($_SESSION['kd_pj'])) {
        if (count($_SESSION['kd_pj']) > 0) {
           $qty = $_SESSION['qty'];
           $hrg = $_SESSION['harga'];
           $total = $_SESSION['total'];
           $i = 0;
           foreach ($_SESSION['kd_pj'] as $kode) {
               $subtotal = ((int)$hrg[$i]*(int)$qty[$i]) ;             
               echo "<tr>";
               echo "<td>" . $kode. "</td>
                    <td>"  . $qty[$i]. "</td> 
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
                                </thead>
                                <tbody>
                                <?php
                                            
                                            $sql = "SELECT * FROM detail_produksi where no_produksi ='$id'";
                                            $ret = pg_query ($db, $sql);
                                            if (!$ret){
                                                echo pg_last_error($db);
                                                exit;
                                            }
                                                while ($row = pg_fetch_Row($ret)) {
                                                    echo "";
                                        ?>      
                                            <tr>
                                                <td>
                                                    <?php echo $row[1];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[2];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[3];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[4];?>
                                                    
                                                </td>
                                                <td>
                                                    <?php echo $row[5];?>
                                                </td>
                                             
                                                <?php echo "<td> 
                                                     <a href='hapusdetail.php?id=".$row[0]."'>hapus</a>
                                                       
                                                   </td>";?>
                                            
                                            <?php
                                            "'";
                                                }
                                                
                                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
            <!-- Table End -->

                 </div>  
                </div>

              </div>
<?php


include_once "footer.php";


?>