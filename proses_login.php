<?php
include_once "koneksi.php";

$email = $_POST['email'];
$sql = "SELECT * FROM pengguna WHERE email = '$email' ";
$cek = pg_query($db, $sql);
$emailada = pg_num_rows($cek);

if ($emailada > 0){
   $ret = pg_query($db, $sql);
   if (!$ret) {
       echo pg_last_error($db);
       exit;
   }
   while ($row = pg_fetch_row($ret)) {
       $email = $row[0];
       $password = $row[1];
       $posisi = $row[2];
       $nama = $row[3];
       $alamat = $row[4];
       $phone = $row[5];
   }
   if (hash('sha1', $_POST['password']) == $password)
        {
       //password cocok
       session_start();
       $_SESSION["login_email"] = $email;
       $_SESSION["login_nama"] = $nama;
       $_SESSION["bendahara"] = $posisi;
       $_SESSION["login_alamat"] = $alamat;
       $_SESSION["login_phone"] = $phone;
       header("location: home.php?success=902");
        }
  else {
       //password tidak cocok
       header("location: index.php?nav=login&error=103");
   }
} else {
    //email tidak ada
    header("location: index.php?nav=login&error=102");
}
if ($posisi=="admin") {
       $_SESSION["email"] = $email;
       $_SESSION["password"] = $password;

    header("location: home.php?success=903");
} 
?>