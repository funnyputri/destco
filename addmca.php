<?php

  include_once "koneksi.php";
?>
    <?php
  
$kd_bb =$_POST ['pilihan'] ;
$jumlah =$_POST ['jumlah'];

$sql ="INSERT INTO mca002 (kd_bb, jumlah)
Values ('$kd_bb','$jumlah');" ;
$ret = pg_query($db, $sql);

echo '<script>window.location="detailpj.php?&&success=tambah-data"</script>';
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

