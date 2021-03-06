<?php

//$latitude = $_POST('latitude');

$centerLocationMap = '<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d119436.06446343641!2d-103.48990608167219!3d20.694909588476502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d20.656128!2d-103.32405759999999!4m5!1s0x8428a7d88f9d10af%3A0xcaba424f1b40d0b1!2sCUCBA!3m2!1d20.745920899999998!2d-103.5128512!5e0!3m2!1ses!2smx!4v1571331996246!5m2!1ses!2smx" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>';

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Brigadas</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <!--<i class="fas fa-laugh-wink"></i>-->
          <img src="images/logolargo.png" class="logo img-fluid mx-auto d-block " alt="Logo Banco Sangre">
        <div class="sidebar-brand-text mx-3">Banco de Sangre</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          
          <img src="images/logolargo.png"  class="logo img-fluid mx-auto d-block " alt="Logo Banco Sangre">

         

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 text-center">
            <!--<h1 class="h3 mb-0 text-gray-800">CENTRO UNIVERSITARIO CON MAYOR NECESIDAD DE BRIGADA</h1>-->
            <h1 class="text-gray-800 mb-0">CENTRO UNIVERSITARIO CON MAYOR NECESIDAD DE BRIGADA</h1>
          </div>



          <div class="row">

            <div class="col-lg-12">

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Información del Centro</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="table-danger">
                    <tr>
                      <th>Centro Universitario</th>
                      <th>Donantes</th>
                      <th>Personal necesario</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <td>CUCBA</td>
                      <td>100</td>
                      <td>125</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          
        </div>
        <!-- /.container-fluid -->
        <div class="row">
            

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <!-- <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div> -->
                    <?php
                    echo $centerLocationMap
                    ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
      </div>
      <div class="row">

            <div class="col-lg-12">

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Información de la Brigada</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="table-primary">
                    <tr>
                      <th>Encargado de la Brigada</th>
                      <th>Telefono</th>
                      <th>Hospital</th>
                      <th>Numero de cedula</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                   
                    <tr>
                      <td>Natzieli</td>
                      <td>33122371271</td>
                      <td>Hospital Civil</td>
                      <td>213989344</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
            
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Paris Flores Belmares 2019 - Banco de sangre. Leones Unidos por la Salud - ALPHA TEAM</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
