<?php
include_once "header.php";
include_once "menu.php";
include ("koneksi.php");
?>

                  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Daftar Bahan Penolong</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Daftar Bahan Penolong</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data Master</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Bahan Penolong</h4>
                    <p class="card-description"> <a href='addbp.php'> <button type='button' class='btn btn-dark'>Tambah</button></a> 
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Kode</th>
                          <th>Nama Bahan Penolong</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <?php
                                            $sql = "SELECT * FROM bahanpen";
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
                                                <?php echo "<td> 
                                                     <a href='hapusbp.php?id=".$row[0]."'>hapus</a>
                                                       :
                                                    <a href='editbp.php?id=".$row[0]."'>edit</a>
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