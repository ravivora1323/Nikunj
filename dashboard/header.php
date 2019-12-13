<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="google-site-verification" content="o5zfcGm_oAtJfaAZXqx1qfIAttwolckSUTqR0biM8zk" />
  <title>LTS Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">


  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../dist/js/basic.min.css">
  <link rel="stylesheet" href="../dist/js/dropzone.min.css">
  

  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">

  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css"> -->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css"> -->
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images/policy.jpg" class="img-circle" alt="Company Logo">
        </div>
        <div class="info">
          <a href="dashboard.php" class="d-block">Policy Insurance</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="./policy.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Policy Data
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="addPolicy.php" class="nav-link">
              <i class="nav-icon far fa-edit"></i>
              <p>
                Add Policy
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="lic_policy.php" class="nav-link">
              <i class="nav-icon fas fa-box-open"></i>
              <p>
                LIC Policy
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="addLicPolicy.php" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Add LIC Policy
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="appointment.php" class="nav-link">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Make Appointment
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="celebrate.php" class="nav-link">
              <!-- <i class="nav-icon fas fa-handshake"></i> -->
              <i class="nav-icon fas fa-birthday-cake"></i>
              <p>
                Celebrate
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="changePass.php" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="../script/logout.php" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">