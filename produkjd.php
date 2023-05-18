<?php
include_once "header.php";
include_once "menu.php";
include ("koneksi.php");
?>

                  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Daftar Produk Jadi</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Daftar Produk Jadi</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Master</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Produk Jadi</h4>
                    <p class="card-description"> <a href='addpj.php'> <button type='button' class='btn btn-dark'>Tambah</button></a> 
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Kode</th>
                          <th>Nama</th>
                          <th>Satuan</th>
                          <!--th>Jumlah</th-->
                          <th>Hpp</th>
                          <th>Gambar</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php
                                            $sql = "SELECT * FROM produkjadi";
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
                                                <td>
                                                    <?php echo $row[2];?>
                                                </td>
                                                <!--td>
                                                   &nbsp;
                                                </td-->
                                                <td>Rp.
                                                    <?php echo number_format($row[3]);?>
                                                </td>
                                                <td>
                                                    <?php echo $row[4];?>
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