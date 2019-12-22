<?php

session_start();

include '../cek_login.php';

if (!isset($_SESSION["login"])) {

      echo "<script>
            alert('Login Dulu Anda !');
            window.location='../login.php'
            </script>";
      exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title>Monitoring Aquarium</title>
  
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="../css/buttons.dataTables.min.css">

  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"> -->

  <!-- endinject -->
  
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../vendors/iconfonts/fontawesome-free-5.6.3-web/css/fontawesome.css">
  <!-- End plugin css for this page -->
  
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png">
  
  
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body style="margin: 50px 0 0;">



<div class="container-scroller">
  <nav class="navbar horizontal-layout col-lg-12 col-12 p-0 fixed-top">
      <div class="nav-top flex-grow-1">
        <div class="container d-flex flex-row h-100 align-items-center">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center">
            <a class="navbar-brand brand-logo" style="color: white;"><img src="../images/logo-aquarium.png"/>Monitoring Aquarium</a>
            <a class="navbar-brand brand-logo-mini" ><img src="#" alt="logo"/></a>
          </div>
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between flex-grow-1">
            <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">
            
            <a class="nav-item nav-link active" href="index.php?page=dashboard" style="color: white;">Dashboard 
            <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="index.php?page=jadwal" style="color: white;">Penjadwalan Pakan</a>
            <a class="nav-item nav-link" href="index.php?page=monitoring" style="color: white;">Monitoring Suhu</a>
            <a class="nav-item nav-link" href="index.php?page=report" style="color: white;">Report Jadwal</a>
            <a class="nav-item nav-link" href="index.php?page=report_suhu" style="color: white;">Report Suhu</a>





              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                  <img src="../images/admin.png" alt="profile"/>
                  <span class="nav-profile-name">Admin</span>
                </a>
                
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
               <!--    <a class="dropdown-item">
                    <i class="icon-settings text-primary mr-2"></i>
                    Settings
                  </a> -->

                  <div class="dropdown-divider"></div>
                  <a href="../proses/logout.php" class="dropdown-item">
                    <i class="icon-logout text-primary mr-2"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>

            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu text-dark"></span>
            </button>
          </div>
        </div>
      </div>
    </nav>

              
             <!--  <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="icon-bell"></i>
                  <span class="count"></span>
                </a> -->
                
                <!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" 
                     aria-labelledby="notificationDropdown">
                  <a class="dropdown-item py-3">
                    <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
                    </p>
                    <span class="badge badge-pill badge-info float-right">View all</span>
                  </a>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-success">
                        <i class="icon-exclamation mx-0"></i>
                      </div>
                    </div>
                   
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                      <p class="font-weight-light small-text mb-0">
                        Just now
                      </p>
                    </div>
                  </a>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-warning">
                        <i class="icon-bubble mx-0"></i>
                      </div>
                    </div>
                    
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                      <p class="font-weight-light small-text mb-0">
                        Private message
                      </p>
                    </div>
                  </a>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-info">
                        <i class="icon-user-following mx-0"></i>
                      </div>
                    </div>
                    
                    <div class="preview-item-content">
                      <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                      <p class="font-weight-light small-text mb-0">
                        2 days ago
                      </p>
                    </div>
                  </a>
                </div>
              </li> -->
              

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper" style="padding: 10px;">
        
            
            <?php
             
             $page = !empty($_GET['page']) ? $_GET['page']: '';
             switch($page) {
               
               case '':
                  include "dashboard.php";
               break;
               
               case 'dashboard':
                  include "dashboard.php";
               break;
               
               case 'jadwal':
                  include "penjadwalan/jadwal.php";
               break;
               
               case 'jadwal':
                  include "penjadwalan/update.php";
               break;
               
               // case 'pemanas':
               //    include "pemanas/pemanas.php";
               // break; 
               
               case 'monitoring';
                    include "monitoring/monitoring.php";
               break;
               
               case 'report';
                    include "report/report_jadwal.php";
               break;

               case 'report_suhu';
                    include "report_suhu/report_suhu.php";
               break;

      }
         
    ?>

         </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
 
  
  
  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->

  <!-- Plugin js for this page-->
  <script src="../vendors/js/fontawesome.js"></script>
  <script src="../vendors/js/fontawesome.min.js"></script>
  <script src="../vendors/js/regular.js"></script>
  <script src="../vendors/js/regular.min.js"></script>
  <script src="../vendors/js/solid.js"></script>
  <script src="../vendors/js/solid.min.js"></script>
  <!-- End plugin js for this page-->
  
  <!-- inject:js -->
  <script src="../js/template.js"></script>
  <script src="../js/minitoggle.js"></script>
  <script src="../js/formpickers.js"></script>
  <script src="../js/form-repeater.js"></script>
  <script src="../js/moment.min.js"></script>

  <script src="../js/js/dataTables.buttons.min.js"></script>
  <script src="../js/js/buttons.flash.min.js"></script>
  <script src="../js/js/jszip.min.js"></script> 
  <script src="../js/js/pdfmake.min.js"></script>
  <script src="../js/js/vfs_fonts.js"></script>
  <script src="../js/js/buttons.html5.min.js"></script>
  <script src="../js/js/buttons.print.min.js"></script>

  <!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>  -->
  <!-- <script src="../js/printThis.js"></script> -->
  <!-- endinject -->
  
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->

</body>
</html>