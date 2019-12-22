<?php

include 'config/koneksi.php';
include 'cek_login.php';

if ( isset($_POST["register"]) ) {

    if ( register($_POST) > 0 ) {

      echo    "<script>
              alert('User Baru Berhasil Ditambahkan !');
              </script>";

    }  else {
      
        echo mysqli_error($koneksi); 
    }

}


?>



<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
  <title>Register</title>



<!-- Fontawesome -->
<link rel="stylesheet" href="vendors/iconfonts/fontawesome-free-5.6.3-web/css/fontawesome.css">
<link rel="shortcut icon" href="images/favicon.png">

<!-- Css Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">



</head>
<body>

        <img src="arwana.png" class="bg" alt="arwana">

        <div class="login-page">
          <div class="form">
            
            
            <form class="login-form" action="" method="post">
            <h1>Register</h1>
            
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <i class="fas fa-user-alt icon"></i>
              </div>
              <input type="text" class="form-control" placeholder="Username" name="username" id="username">
            </div>

            <div class="input-group mb-3">
                 <i class="fas fa-unlock-alt icon"></i>
              <input type="password" class="form-control" placeholder="Password" name="password" id="password">
            </div>


            <div class="input-group mb-3">
                 <i class="fas fa-check icon"></i>
              <input type="password" class="form-control" placeholder="Konfrimasi" name="password2" id="password2">
            </div>
            
              <button type="submit" name="register">Register !</button>
            
            </form>
          </div>
        </div>





<style>

@import url(https://fonts.googleapis.com/css?family=Roboto:300);

/* Login Form */
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}

/* Form */
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 30px auto 100px;
  padding: 45px;
  text-align: left;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

/* Input */
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}

/* Button */
.form button {
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  min-width: 95%;
  border: none;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  cursor: pointer;
  margin-left: 13px;
  border-radius: 13px;
}

/**/
.form button:hover,.form button:active,.form button:focus {
  background: #4dc3ff;

}

.form h1 {
  text-align: center;
  padding: 10px;
}

/* Body */
  body {
   margin: 0;
   padding: 0;
   text-align: center;
}

.bg {
     width: 100%;
     height: 100%;
     position: fixed;
     z-index: 1;
     float: left;
     left: 0;
}

.content {
     width: 100%;
     height: auto;
     margin: 0 auto;
     position: relative;
     z-index: 5;
     /*background: #fff;*/
     /*  padding: 30px;*/
     text-align: center;
}




</style>

  <!-- Js Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- Akhir Js Bootstrap -->

<!-- Js Fontawesome -->
  <script src="vendors/js/fontawesome.js"></script>
  <script src="vendors/js/fontawesome.min.js"></script>
  <script src="vendors/js/regular.js"></script>
  <script src="vendors/js/regular.min.js"></script>
  <script src="vendors/js/solid.js"></script>
  <script src="vendors/js/solid.min.js"></script>
<!-- Akhir Js Fontawesome -->







</body>
</html>