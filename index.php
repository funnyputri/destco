<?php
include ("koneksi.php");
?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Destco</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- End layout styles -->
      <link rel="shortcut icon" href="assets/images/destco.png" />
    </head>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PT Kreasi Manis Berjaya</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/destco.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <center><img src="assets/images/destco.png"></center>
                </div>
                <center><h4>Selamat Datang</h4>
                <h6 class="font-weight-light"><b>PT Kreasi Manis Berjaya</b></h6></center>
                <div class="right">
            <form enctype="multipart/form-data" method="post" action="proses_login.php">
            <div class="content">
              <input type="text" value="" name="email" class="form-control form-control-lg" placeholder="Username" >
              <br>
              <br>
              <input type="password" value="" name="password"class="form-control form-control-lg"  placeholder="Password">
              <br>
              <br>
              <a href="#">Forgotten Password</a><br>
              <br>
              <input type="submit" class="btn btn-primary" value="Sign In">
              <a href="regis.php" class="btn btn-primary">Sign Up</a></fieldset>
            </div>
          </form>
        </div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
        (function() {
            const queryString = window.location.seacrh;
            const urlParams = new URLSearchParams(queryString);
            const err = parseInt(urlParams.get('error'))
            if (err == 102) {
                alert("Login Gagal, Email tidak terdartar !!"); 
            } else if (err == 103) {
                alert("Login Gagal, Password tidak cocok !!");
            }
        })();
    </script>
</body>
</html>