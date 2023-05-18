<?php
include_once "header.php";
include_once "menu.php";
include "koneksi.php";
?>
        <!--  end koneksi-->

<body>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Halaman Utama Buku Besar</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Buku Besar</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<h3> Buku Besar Umum </h3>

<section class="content">

     <table border="0" width="100%">
         <tr>
             <td colspan="3">Nama Akun: Kas</td>
             <td align="3" colspan="4">Kode Akun: 111</td>
         </tr>
     </table>
     <table class="table table-bordered border-primary" border="1" width="100%">
         <thead>
             <tr>
             <div class="table-responsive">
                 <th class="text-center">Tanggal</th>
                 <th class="text-center">Keterangan</th>
                 <th class="text-center">Ref</th>
                 <th class="text-center">Debit</th>
                 <th class="text-center">Kredit</th>
                 <th class="text-center">D/K</th>
                 <th class="text-center">Saldo</th>
             </tr>
         </thead>
         <tbody>
             <?php
                $saldo = 0;
                $sql = "select tgl, ref1, keterangan1, ref2, keterangan2, sum(debit), 0 as kredit from vbb group by tgl,ref1, keterangan1,ref2,keterangan2;";
                $data = pg_query($db, $sql);
                while ($row = pg_fetch_row($data)) {
                    $saldo = $row[5] - $row[6];
                    echo '
                    <tr>
                    <td>' . $row[0] . '</td> 
                    <td>' . $row[4] . '</td> 
                    <td align="center">' . $row[3] . '</td> 
                    <td align="right">' . $row[5] . '</td> 
                    <td align="right">0</td> 
                    <td align="center">D</td>
                    <td align="right">' . $saldo . '</td>
                    </tr>';
                }
                ?>
         </tbody>
     </table>

     <br>

     <table border="0" width="100%">
         <tr>
             <td colspan="3">Nama Akun: Persediaan Bahan Baku</td>
             <td align="3" colspan="4">Kode Akun: 121</td>
         </tr>
     </table>
     <table class="table table-bordered border-primary" border="1" width="100%">
         <thead>
             <tr>
             <div class="table-responsive">
                 <th class="text-center">Tanggal</th>
                 <th class="text-center">Keterangan</th>
                 <th class="text-center">Ref</th>
                 <th class="text-center">Debit</th>
                 <th class="text-center">Kredit</th>
                 <th class="text-center">D/K</th>
                 <th class="text-center">Saldo</th>
             </tr>
         </thead>
         <tbody>
             <?php
                $saldo = 0;
                $sql = "select tgl, ref1, keterangan1, ref2, keterangan2,  0 as debit, sum(kredit) from vbb group by tgl,ref1, keterangan1,ref2,keterangan2;";
                $data = pg_query($db, $sql);
                while ($row = pg_fetch_row($data)) {
                    $saldo = $row[6] - $row[5];
                    echo '
                    <tr>
                    <td>' . $row[0] . '</td> 
                    <td>' . $row[2] . '</td> 
                    <td align="center">' . $row[1] . '</td> 
                    <td align="right">0</td>
                    <td align="right">' . $row[6] . '</td> 
                    <td align="center">K</td>
                    <td align="right">' . $saldo . '</td>
                    </tr>';
                }
                ?>
         </tbody>
     </table>

     <br>

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