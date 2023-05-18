<?php
include_once "header.php";
include_once "menu.php";
include_once "koneksi.php";
?>
        <!--  end koneksi-->

<body>
  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Halaman Utama Jurnal Umum</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item">Jurnal Umum</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
 

 <h3> Jurnal Umum </h3>
<table class="table table-bordered border-primary" border="1" width="100%">
                            <thead>
                                <tr>
                                            <th class="text-center">Tanggal</th>
                                            <th class="text-center">No. Bukti</th>
                                            <th class="text-center">Keterangan</th>
                                            <th class="text-center">Ref</th>
                                            <th class="text-center">Debit</th>  
                                            <th class="text-center">Kredit</th> 
                                </tr>
                            </thead>
                            <tbody>
             <?php
                $total1 = $total2 = 0;
                $sql = "SELECT * FROM jurnal_umum ORDER BY tgl,id";
                $data = pg_query($db, $sql);
                while ($row = pg_fetch_row($data)) {
                    echo '
                    <tr rowspan=2>
                    <td>' . $row[1] . '</td> 
                    <td>' . $row[2] . '</td> 
                    <td>' . $row[3] . '</td> 
                    <td align="center">' . $row[4] . '</td> 
                    <td align="right">Rp.'. number_format($row[5]) . '</td> 
                    <td align="right">Rp.'. number_format($row[6]). '</td> 
                    </tr>';
                    $total1 += $row[5];
                    $total2 += $row[6];
                }

                echo '
            <tr>
            <td align="center" colspan="4">
                <b>TOTAL KESELURUHAN</b></td>
            <td align="right">Rp.'. number_format($total1). '</td>
            <td align="right">Rp.'. number_format($total2). '</td>
            </tr>';

                ?>
    </tbody>
</table>
        </div>
        



  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<script>

    </script>

<?php


include_once "footer.php";


?>