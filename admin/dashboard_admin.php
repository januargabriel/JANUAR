
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>By Anak RPL| APK PKBW</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo base_url('asset/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('asset/dist/css/adminlte.min.css');?>">
  <style type="text/css">
    .wrapper {
  width: ;
  height:auto;
 overflow: hidden;
  position:relative;
}
.wrapper > img {
  width: 900px;
  z-index:10;
}
.lapis {
  width:100%;
  height:100px;
  background-color:rgba(0, 0, 0, 0.6);
  position:absolute;
  z-index:9999;
  bottom:75%;
  color: white;
}
 lapis > h1 {
  margin-left:10px;
  color : white;
}
aside{
  font-family:"Monaco";
}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-dahsboard_admin">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url('Page/index');?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url('Programmer/index');?>" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url('Login/logout');?>" class="nav-link">Log Out</a>
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
     <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: ">
          <!-- Brand Logo -->
          <a href="#" class="brand-link">
            <img src="<?php echo base_url('asset/img/apk.jpg');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;color: white">
            <span class="brand-text font-weight-light"style="font-family: Times New Roman">APK PKBW</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="<?php echo base_url('asset/dist/img/user2-160x160.jpg');?>" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="<?php echo site_url('Admin/profile');?>" class="d-block">ADMIN</a>
              </div>
            </div>
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                  <a href="<?php echo site_url('Page/index');?>" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                   <i class="nav-icon fas fa-copy"></i>
                    <p>
                    Data Guru
                     <i class="fas fa-angle-left right"></i>
                     <span class="badge badge-info right">2</span>
                   </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo site_url('Admin/guru_piket');?>" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Guru Piket</p>
                      </a>
                    </li>
                <li class="nav-item">
                  <a href="<?php echo site_url('Admin/guru');?>" class="nav-link">
                    <i class="nav-icon fas fa-user-circle" aria-hidden="true"></i>
                    <p>
                      Guru Mapel
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo site_url('Admin/wali');?>" class="nav-link">
                    <i class="nav-icon fas fa-user-circle" aria-hidden="true"></i>
                    <p>
                      Wali Kelas
                    </p>
                  </a>
                </li>
                 </ul>
              </li>
               <li class="nav-item">
                  <a href="<?php echo site_url('Admin/data');?>" class="nav-link">
                   <i class="nav-icon fas fa-copy"></i>
                    <p>
                     Manajemen Data
                   </p>
                  </a>
                </li>
               <li class="nav-item">
                  <a href="<?php echo site_url('Admin/tahun');?>" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                       Tahun Ajaran
                      <!--<span class="badge badge-info right">2</span>-->
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo site_url('Admin/kelas');?>" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                      Kelas
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                   <a href="<?php echo site_url('Admin/jurusan');?>" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                      Jurusan
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                   <a href="<?php echo site_url('Admin/mapel');?>" class="nav-link">
                    <i class="nav-icon fa fa-book" aria-hidden="true"></i>
                    <p>
                      Mapel
                    </p>
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="<?php echo site_url('Admin/tampilan');?>" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>
                      Tampilan
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo site_url('Login/logout');?>" class="nav-link">
                    <i class="nav-icon fas fa-power-off" aria-hidden="true"></i>
                    <p>
                      Log Out
                    </p>
                  </a>
                </li>
          </div>
          <!-- /.sidebar -->
        </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>APK PKBW</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
             
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <div class="wrapper">
                <!-- <img src="<?php echo base_url('asset/img/buku.png');?>" style="width: -webkit-fill-available; height: 500px;">
                <div class="lapis"> -->
                <h1>
                  Welcome Back <?php echo $this->session->userdata('username');?>
                </h1>
                <!-- </div> -->
              </div>
                    <div class="row">
                      <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                          <div class="inner">
                            <h3>Profile</h3>

                            <p>Anda</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </div>
                          <a href="<?php echo site_url('Admin/profile');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                          <div class="inner">
                           
                            <h3>2022/2023</sup></h3>

                            <p>Tahun Yang Aktive</p>
                          </div>
                          <div class="icon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                          </div>
                          <a href="<?php echo site_url('Admin/tahun');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                          <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-person-add"></i>
                          </div>
                          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                          <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                          </div>
                          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                    </div>
                <h3 class="card-title" style="font-family: Times New Roman">Aplikasi Perkembangan Berbasis Web</h3>

                <!-- <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div> -->
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
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
<script src="<?php echo base_url('asset/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('asset/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/dist/js/adminlte.min.js');?>"></script>
</body>
</html>