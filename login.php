<?php

session_start();

include 'config/koneksi.php';
include 'cek_login.php';


// Set Cookie
if ( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
      $id = $_COOKIE['id'];
      $key = $_COOKIE['key'];

      // Ambil Username Berdasarkan Id
      $result = mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$id'");

      $row = mysqli_fetch_assoc($result);

      // Cek Cookie Dan Username
      if ( $key === hash('sha256', $row['username']) ) {
           $_SESSION['login'] = true;
        
      }
}

// Masuk Ke Dalam Index
if ( isset($_SESSION["login"]) ) {
    header("location:module/index.php");
    exit;
}

// Set Login
if ( isset($_POST['login']) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");



// Cek Username
  if (mysqli_num_rows($result) === 1 ) {


    // Cek Password
     $row = mysqli_fetch_assoc($result);
     if (password_verify($password, $row["password"]) ) {
          // Set Session Login
          $_SESSION["login"] = true;

          //Cek Remember Me
          if( isset($_POST['remember']) ) {
            
            // Buat Cookie
            // setcookie('login' , 'true' , time() + 60);
            setcookie('id', $row['id'], time() + 60);
            setcookie('key', hash('sha256', $row['username']), time() + 60);
          }



         header("location:module/index.php");
         exit;
     }
  }
    $error = true;
}


?>



<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
  <title>Login</title>



<!-- Fontawesome -->
<link rel="stylesheet" href="vendors/iconfonts/fontawesome-free-5.6.3-web/css/fontawesome.css">
<link rel="shortcut icon" href="images/favicon.png">

<!-- Css Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">



</head>
<body>

        <?php if ( isset($error) )  {
              
              echo "<script>
                    alert('Username Dan Password Salah !');
                    </script>";          
         }
        
        ?>
      
        <? endif; ?>

        <img src="images/arwana2.jpg" class="bg" alt="arwana2">

        <div class="login-page">
          <div class="form">
            
            
            <form class="login-form" action="" method="post">
            
            <div class="input-group mt-3">
              <div class="input-group-prepend">
                <i class="fas fa-user-alt icon" style="height: 3em;"></i>
              </div>
              <input type="text" class="form-control" placeholder="Username" name="username" id="username" autocomplete="off">
            </div>

            <div class="input-group mt-3">
                 <i class="fas fa-key" style="height: 3em; margin:2px 2px;"></i>
              <input type="password" class="form-control" placeholder="Password" name="password" id="password">
            </div>

<!--              <div class="input-group mt-3">
             <i class="fas fa-check-square"></i>
                <input type="checkbox" class="form-check-input" name="remember" id="remember" style="margin:3px -99px;">
              </div>

                <a href="register.php" style="margin-left: 100px;">Register</a> -->

              <button type="submit" name="login" class="login-btn">login</button>
            
            </form>
          </div>
        </div>





<style>

@import url(https://fonts.googleapis.com/css?family=Roboto:300);

/* Login Form */
.login-page {
  width: 360px;
  padding: 10% 0 10%;
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
  border-radius: 20px;
}

/* Input */
.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  margin: 5px 0 15px;
  padding: 15px;
  font-size: 15px;
  border-top-left-radius: 30px !important;
  border-bottom-left-radius: 30px !important;
  border-top-right-radius: 30px !important;
  border-bottom-right-radius: 30px !important;

  
}

.form .login-btn {
  width: 100%;
  margin-top: 10px;
  display: block;
  border: 1px solid #93f9b9;
  text-transform: uppercase;
  padding: 6px 0 6px;
  margin-left: 3%;
  border-radius: 13px;
  color: black;
  background: #93f9b9;
  
}

.form .login-btn:hover {
  background: rgb(29,151,108, .8);
  outline:none;
  cursor: pointer;
  transition-duration: 1s;
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
     opacity: 0.8;
}

.content {
     width: 100%;
     height: auto;
     margin: 0 auto;
     position: relative;
     z-index: 5;
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