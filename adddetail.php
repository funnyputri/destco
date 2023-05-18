<?php

  include_once "koneksi.php";
?>
    <?php

$kd_pj =$_POST ['produk'] ;
$kd_bb =$_POST ['pilihan'] ;
$kode_bahan = substr ($kd_bb, 0,11);
$jumlah =$_POST ['jumlah'];

$sql ="INSERT INTO detail_produk (kd_pj, kd_bb, jumlah, kode_bahan)
Values ('$kd_pj','$kd_bb','$jumlah','$kode_bahan');" ;
$ret = pg_query($db, $sql);

echo '<script>window.location="produkjd.php?&&success=tambah-data"</script>';
   ?>     
</section>
<script>
    window.addEventListener("load", function(){
        picker.attach({
            container: 1
        });
    });
</script>
<?php
  include_once "footer.php";

  ?>

