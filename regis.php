<div id="content">
      <!--Breadcrumb Part Start-->
      <div class="breadcrumb"> <a href="index.html">Home</a> » <a href="#">Account</a> » <a href="register.html">Register</a> </div>
      <!--Breadcrumb Part End-->
<h1>Register Account</h1>
      <form enctype="multipart/form-data" method="post" action="proses_reg_simpan.php">
        <h2>Your Personal Details</h2>
        <div class="content">
          <table class="form">
            <tbody>
              <tr>
                <td><span class="required">*</span> Nama Lengkap:</td>
                <td><input class="large-field" type="text" value="" name="nama" required></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Alamat:</td>
                <td><input class="large-field" type="text" value="" name="alamat" required></td>
              </tr>
              <tr>
                <td><span class="required">*</span> E-Mail:</td>
                <td><input class="large-field" type="text" value="" name="email" required></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Telephone:</td>
                <td><input class="large-field" type="text" value="" name="phone" required></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Posisi:</td>
                <td><input class="large-field" type="text" value="" name="posisi" required></td>
              </tr>
            </tbody>
          </table>
        </div>
        <h2>Your Password</h2>
        <div class="content">
          <table class="form">
            <tbody>
              <tr>
                <td><span class="required">*</span> Password:</td>
                <td><input class="large-field" type="password" value="" name="pass_1" required></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Password Confirm:</td>
                <td><input class="large-field" type="password" value="" name="pass_2" onblur="cek_password()" required></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="buttons">
          <div class="right">I have read and agree to the <a alt="Privacy Policy" href="http://localhost/upload/index.php?route=information/information/info&amp;information_id=3" class="colorbox cboxElement"><b>Privacy Policy</b></a>
            <input type="checkbox" value="1" name="agree">
            <input type="submit" class="button" value="Continue">
          </div>
        </div>
      </form>
    </div>

    <script>
      //self executing function here
      (function() {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const err = parseInt(urlParams.get('error'))
        if (err == 101) {
          alert("Email sudah terdaftar, Gunakan email lainnya !!");
        }

      })();

      function cek_password() {
        var pass_1 = document.getElementsByName("pass_1")[0].value;
        var pass_2 = document.getElementsByName("pass_2")[0].value;
        if (pass_1 == pass_2) {
          //pass_1 dan pass_2 SAMA, abaikan
        } else {
          alert("Komfirmasi Password tidak sama, perbaiki !!");
          document.getElementsByName("pass_2")[0].value = "";
        }
      }
</script>