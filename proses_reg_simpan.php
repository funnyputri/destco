<?php
include_once "koneksi.php";

$email = $_POST['email'];
$sql = "SELECT email FROM pengguna WHERE email = '$email' ";
$cek = pg_query($db, $sql);
$emailsama = pg_num_rows($cek);
if ($emailsama > 0){
    // email sudah digunakan sebelumnya
    header("location: index.php?nav=register&error=101");
    ///
} else {
    // email belum terdaftar
    $email = $_POST['email'];
    $password = hash('sha1', $_POST['pass_1']);
    $posisi =$_POST['posisi'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO pengguna
            VALUES ('$email','$password','$posisi','$nama','$alamat','$phone') ";
    $ret = pg_query($db, $sql);

    if (!$ret) {
        echo pg_last_error($db);
        exit;
    }
    header("location: index.php?success=901");
}