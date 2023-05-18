<?php
include_once "header.php";
include_once "menu.php";
include ("koneksi.php");
$id=$_GET['id'];
$nm=$_GET['nama'];
$sql = "SELECT * FROM bahan_baku ORDER BY kd_bb";
        $data = pg_query($db, $sql);
        

?>

                  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Detail Bahan Baku Produksi</h3>
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
                            <form method="POST" action="adddark.php">
                            <td style="width:25pc;">
                              <tr>  
                       <select name="pilihan" class="form-control" input type="text"> 
                          <?php
                          while ($row = pg_fetch_row($data)) {
                         echo "<option>" . $row[0] . 
                         " - ". $row[1] . 
                         " - " . $row[2] .'</option>';
                        }
                        ?></select><br></td>
                        <td style="width:25pc;"><input type="text" class="form-control" name="jumlah"
                        placeholder="Masukan Jumlah"></td>
                        <td style="padding-left:10px;"><button id="tombol-simpan" class="btn btn-dark"></i> Tambah</button>
                        </form>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" >Bahan Baku </th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                            
                                            $sql = "SELECT * FROM detail_produk where kd_pj ='$id'";
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
                                                     <a href='hapusdetail.php?id=".$row[0]."'>hapus</a>
                                                       :
                                                    <a href='editdetail.php?id=".$row[0]."'>edit</a>
                                                   </td>";?>
                                            
                                            <?php
                                            "'";
                                                }
                                                
                                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">MC-002 Milk Chocolate</h6>
                            <form method="POST" action="addmc.php">
                            <td style="width:25pc;">
                              <tr>  
                       <select name="pilihan" class="form-control" input type="text"--> 
                          <!--?php
                          $sql = "SELECT * FROM bahan_baku ORDER BY kd_bb";
                          $data = pg_query($db, $sql);
                          
    
                          while ($row = pg_fetch_row($data)) {
                         echo "<option>" . $row[0] . 
                         " - ". $row[1] . 
                         " - " . $row[2] .'</option>';
                        }
                        ?></select><br></td>
                        <td style="width:25pc;"><input type="text" class="form-control" name="jumlah"
                        placeholder="Masukan Jumlah"></td>
                        <td style="padding-left:10px;"><button id="tombol-simpan" class="btn btn-dark"></i> Tambah</button>
                        </form>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                        <th scope="col" >Bahan Baku </th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody-->
                                <!--?php
                                            $sql = "SELECT * FROM mc002";
                                            $ret = pg_query ($db, $sql);
                                            if (!$ret){
                                                echo pg_last_error($db);
                                                exit;
                                            }
                                                while ($row = pg_fetch_Row($ret)) {
                                                    echo "";
                                        ?>      
                                            <tr>
                                                <td-->
                                                    <!--?php echo $row[0];?>
                                                </td>
                                                <td-->
                                                    <!--?php echo $row[1];?>
                                                </td-->
                                             
                                                <!--?php echo "<td> 
                                                     <a href='hapusmc.php?id=".$row[0]."'>hapus</a>
                                                       :
                                                    <a href='editmc.php?id=".$row[0]."'>edit</a>
                                                   </td>";?-->
                                            
                                            <!--?php
                                            "'";
                                                }
                                               
                                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">MCA-002 Matcha Chocolate</h6>
                            <form method="POST" action="addmca.php">
                            <td style="width:25pc;">
                              <tr>  
                       <select name="pilihan" class="form-control" input type="text"--> 
                          <!--?php
                          $sql = "SELECT * FROM bahan_baku ORDER BY kd_bb";
                          $data = pg_query($db, $sql);
                          
    
                          while ($row = pg_fetch_row($data)) {
                         echo "<option>" . $row[0] . 
                         " - ". $row[1] . 
                         " - " . $row[2] .'</option>';
                        }
                        ?></select><br></td>
                        <td style="width:25pc;"><input type="text" class="form-control" name="jumlah"
                        placeholder="Masukan Jumlah"></td>
                        <td style="padding-left:10px;"><button id="tombol-simpan" class="btn btn-dark"></i> Tambah</button>
                        </form>
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                        <th scope="col" >Bahan Baku </th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                            $sql = "SELECT * FROM mca002";
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
                                                     <a href='hapusmca.php?id=".$row[0]."'>hapus</a>
                                                       :
                                                    <a href='editmca.php?id=".$row[0]."'>edit</a>
                                                   </td>";?>
                                            
                                            <?php
                                            "'";
                                                }
                                               
                                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">TC-001 Taro Chocolate</h6>
                            <form method="POST" action="addtc.php">
                            <td style="width:25pc;">
                              <tr>  
                       <select name="pilihan" class="form-control" input type="text"> 
                          <?php
                          $sql = "SELECT * FROM bahan_baku ORDER BY kd_bb";
                          $data = pg_query($db, $sql);
                          
    
                          while ($row = pg_fetch_row($data)) {
                         echo "<option>" . $row[0] . 
                         " - ". $row[1] . 
                         " - " . $row[2] .'</option>';
                        }
                        ?></select><br></td>
                        <td style="width:25pc;"><input type="text" class="form-control" name="jumlah"
                        placeholder="Masukan Jumlah"></td>
                        <td style="padding-left:10px;"><button id="tombol-simpan" class="btn btn-dark"></i> Tambah</button>
                        </form>
                            <table class="table table-dark">
                                <thead>
                                <tr>
                                        <th scope="col" >Bahan Baku </th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                            $sql = "SELECT * FROM tc001";
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
                                                     <a href='hapustc.php?id=".$row[0]."'>hapus</a>
                                                       :
                                                    <a href='edittc.php?id=".$row[0]."'>edit</a>
                                                   </td>";?>
                                            
                                            <?php
                                            "'";
                                                }
                                               
                                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Bordered Table</h6>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Table Without Border</h6>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">ZIP</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>USA</td>
                                            <td>123</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>mark@email.com</td>
                                            <td>UK</td>
                                            <td>456</td>
                                            <td>Member</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>jacob@email.com</td>
                                            <td>AU</td>
                                            <td>789</td>
                                            <td>Member</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->

                 </div>  
                </div>

              </div>
<?php


include_once "footer.php";


?>