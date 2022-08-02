<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>By Anak RPL| APK PKBW</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard_admin.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="login1.php" class="nav-link">Log Out</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="index3.html" class="brand-link">
            <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">APK PKBW</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">ADMIN</a>
              </div>
            </div>
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                      Dashboard
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="profile_admin.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>PENGATURAN PROFIL ADMIN</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                   <a href="jurusan_admin.php" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      JURUSAN
                    </p>
                  </a>
                </li>
               <li class="nav-item menu-open">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      MANAJEMEN DATA
                      <i class="fas fa-angle-left right"></i>
                      <span class="badge badge-info right">3</span>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pilih_jurusan.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>KELAS X</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pilih_jurusan.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>KELAS XI</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pilih_jurusan.php" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>KELAS XII</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="Tahun_Ajaran_admin.php" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                      MANAJEMEN TAHUN AJARAN
                      <!--<span class="badge badge-info right">2</span>-->
                    </p>
                  </a>
                </li>
              <li class="nav-item">
                  <a href="guru_mapel.php" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      GURU MAPEL
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="kelas_admin.php" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                      KELAS
                    </p>
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="kelas_admin.php" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                      TAMPILAN
                    </p>
                  </a>
                </li>
                <li>
                  <a href="login1.php"><span class="btn btn-danger" style="margin-left: 50px">
               <i class="fa fa-power-off" aria-hidden="true"></i> LOG OUT</span></a>
                </li>
          </div>
          <!-- /.sidebar -->
        </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard_admin.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="login1.php"> Log Out</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-7" style="margin: auto;">
        
            <!-- Input addon -->
          
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="Kode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="Kode">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="Kode Jurusan" class="col-sm-2 col-form-label">Kode Jurusan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Kode Jurusan">
                    </div>
                  
                  </div>
                  <div class="form-group row">
                    <label for="Password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Password">
                    </div>
                  </div>  
                   <div class="form-group row">
                    <label for="Nama Guru" class="col-sm-2 col-form-label">Nama Guru</label>
                     <div class="col-sm-10">
                      <input type="text" class="form-control" id="Nama Guru">
                    </div>               
                </div>
                <label for="Mapel" class="col-sm-2 col-form-label">Mapel</label>
                <div class="col-sm-10">
                      <select style="">Jam Pelajaran
                        <option>Matematika</option>
                         <option>Bahasa Indonesia</option>
                          <option>Ipa</option>
                           <option>Bahasa Inggris</option>
                            <option>Bahasa Jawa</option>
                             <option>PPKN</option>
                              <option>Minggu</option>
                      </select>
                    </div> 
                    <label for="Guru Pengganti" class="col-sm-2 col-form-label">Guru Pengganti</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Guru Pengganti">
                    </div> 
                <!-- /.card-body -->
                <div class="card-footer">
                 <a href="tampilan_data_admin.php" style="color : white"> <button type="submit" class="btn btn-info">Simpan</a></button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2022-2023 <a href="#">Anak RPL</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>