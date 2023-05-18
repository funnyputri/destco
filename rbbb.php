<?php
include_once "header.php";
include_once "menu.php";
include ("koneksi.php");
?>

                  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Rincian Biaya Bahan Baku</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Rincian Biaya Bahan Baku</h4>
                    <p class="card-description"> <a href='beliproduk.php'> <button type='button' class='btn btn-dark'>Tambah</button></a> 
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No Bukti Pembelian</th>
                          <th>Kode Bahan Baku</th>
                          <th>Total Transaksi Pembelian</th>
                          <th>Supplier</th>
                          <th>Tanggal</th>
                        </tr>
                      </thead>
                      <?php
                                            $sql = "SELECT * FROM biaya_bb";
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
                                                    <?php echo $row[0];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[1];?>
                                                </td>
                                                <td>Rp.
                                                    <?php echo number_format($row[2]);?>
                                                </td>
                                                <td>
                                                    <?php echo $row[3];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[4];?>
                                                </td>
                                                
                                            
                                            <?php
                                            "'";
                                                }
                                                pg_close($db);
                                            ?>
                      </tbody>

                    </table>

                  </div>
                </div>
              </div>
<?php


include_once "footer.php";


?>