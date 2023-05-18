<?php
ob_start();
session_start();
include_once "header.php";
include_once "menu.php";
include ("koneksi.php");
$id=$_GET['id'];
?>

                  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Detail Produksi</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Detail Produksi</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Permintaan</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">Nomor Permintaan Produksi <?php echo "$id" ;?> </h4>
                    <p class="card-description"> <a href='adddetailminta.php?nopro=<?php echo "$id" ;?>'> <button type='button' class='btn btn-dark'>Tambah</button></a> 
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <!--th>No Produksi</th-->
                          <th>Kode Produk</th>
                          <th>Nama Produk</th>
                          <th>Qty</th>
                          <th>Harga</th>
                          <th>Total Harga</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php
                                            $sql = "SELECT * FROM detailproduksi where noproduksi ='$id'" ;
                                            $ret = pg_query ($db, $sql);
                                            if (!$ret){
                                                echo pg_last_error($db);
                                                exit;
                                            }
                                                while ($row = pg_fetch_Row($ret)) {
                                                    echo "";
                                        ?>      
                                            <tr>
                                                <!--td>
                                                    <!?php echo $row[0];?>
                                                </td-->
                                                <td>
                                                    <?php echo $row[1];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[2];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[3];?>
                                                </td>
                                                <!--td>
                                                   &nbsp;
                                                </td-->
                                                <td>Rp.
                                                    <?php echo number_format($row[4]);?>
                                                </td>
                                                <td>Rp.
                                                    <?php echo number_format($row[5]);?>
                                                </td>
                                               
                                                <?php echo "<td> 
                                                     <a href='detailpj.php?id=".$row[0]."&nama=".$row[1]."'>detail</a>
                                                       :
                                                    <a href='editpj.php?id=".$row[0]."'>edit</a>
                                                   </td>";?>
                                            
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