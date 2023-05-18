<?php
  include_once "header.php";
  include_once "menu.php";
  include_once "koneksi.php";
  ?>

<?php


$nobukti = $_POST['bukti'];
$kode = $_POST['kd_bb'];
$total = $_POST['total'];
$kd_sup = $_POST['kd_sup'];
$tanggal = $_POST['tanggal'];



$sql = "INSERT INTO biaya_bb (bukti, kd_bb, total, 
                            kd_sup, tanggal)
             VALUES ('$nobukti',
                 '$kode',
                 '$total',
                 '$kd_sup',
                 '$tanggal'); ";
                 $data = pg_query($db, $sql);
                 
                 $sql3 = "INSERT INTO jurnal_umum
                 (tgl,
                 bukti,
                 keterangan,
                 ref,
                 debit,
                 kredit)
                 VALUES
                 ('$tanggal',
                   '$nobukti',
                   'Persediaan Bahan Baku',
                   '121',
                   '$total',
                   '0') ";
                $data3 = pg_query($db, $sql3);
                
                $sql4 = "INSERT INTO jurnal_umum
                (tgl,
                bukti,
                keterangan,
                ref,
                debit,
                kredit)
                VALUES
                ('$tanggal',
                '$nobukti',
                '&nbsp; &nbsp; Kas',
                '111',
                '0',
                '$total') ";
                $data4 = pg_query($db, $sql4);

                $sql5 = "INSERT INTO tju
                (tgl,bukti,ref1,keterangan1,ref2,keterangan2,nominal)
                VALUES ('$tanggal','$nobukti','111','Kas','121','Persediaan bahan baku','$total') ";
                $data5 = pg_query($db, $sql5);

                if (!$data) {
                    echo pg_last_error($db);
                    exit;
                    } echo '<script>alert("Data Transaksi Berhasil DiSimpan!");
                    window.location="rbbb.php?"</script>';
                    
                     ?>
                     </script>
                        
                        <script src="js/jquery-1.11.1.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>
                        <script src="js/chart.min.js"></script>
                        <script src="js/chart-data.js"></script>
                        <script src="js/easypiechart.js"></script>
                        <script src="js/easypiechart-data.js"></script>
                        <script src="js/bootstrap-datepicker.js"></script>
                        <script src="js/custom.js"></script>
                        <script>
                            window.onload = function () {
                        var chart1 = document.getElementById("line-chart").getContext("2d");
                        window.myLine = new Chart(chart1).Line(lineChartData, {
                        responsive: true,
                        scaleLineColor: "rgba(0,0,0,.2)",
                        scaleGridLineColor: "rgba(0,0,0,.05)",
                        scaleFontColor: "#c5c7cc"
                        });
                    };
                        </script>
                            
                    </body>
                    </html>
                      <?php
                      include_once "footer.php";
                      ?>
 