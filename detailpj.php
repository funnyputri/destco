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
                            <form method="POST" action="adddetail.php">
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
                        <input type="hidden" class="form-control" name="produk" value="<?php echo $id; ?>">
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
                                                    <?php echo $row[1];?>
                                                </td>
                                                <td>
                                                    <?php echo $row[2];?>
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