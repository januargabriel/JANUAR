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
    aside{
  font-family:"Times New Roman";
}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-dahsboard_admin">
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
          <!-- left column -->
          <div class="col-md-10" style="margin: auto;width: 200%">
        
            <!-- Input addon -->
          
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Horizontal Form</h3>
              </div>
              <div>
                <?= validation_errors() ?>
                  
                </div>
        <?= form_open_multipart('User/create_tabel_data', ['class'=>'form-horizontal']) ?>
              <form class="form-horizontal">
                <div class="card-body row">
                <div class="satu col-sm-6">
                                   <div class="form-group row">
                    <label for="TAHUN AJARAN" class="col-sm-4 col-form-label">TAHUN AJARAN</label>
                    <div class="col-sm-6">
                     <select style="">Hari
                        <option>2023/2024</option>
                         <option>2024/2025</option>
                          <option>2025/2026</option>
                      </select>
                    </div>
                  </div>
                   <div class="form-group row " >
                    <label for="Hari" class="col-sm-4 col-form-label">Hari</label>
                    <div class="col-sm-6">
                      <select style="">Hari
                        <option>Senin</option>
                         <option>Selasa</option>
                          <option>Rabu</option>
                           <option>Kamis</option>
                            <option>Jumat</option>
                             <option>Sabtu</option>
                              <option>Minggu</option>
                      </select>
                    </div>
                  
                  </div>
                  <div class="form-group row">
                    <label for="Tanggal" class="col-sm-4 col-form-label">Tanggal</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" id="Tanggal">
                    </div>
                  </div>  
                   <div class="form-group row">
                    <label for="Pelajaran" class="col-sm-4 col-form-label">Pelajaran</label>
                     <div class="col-sm-6">
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
                </div>
                <div class="form-group row">
                    <label for="Pelajaran" class="col-sm-4 col-form-label">Guru Mapel</label>
                     <div class="col-sm-6">
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
                </div>
                <div class="form-group row">
                    <label for="Pelajaran" class="col-sm-4 col-form-label" style="width: 50%">Guru Pengganti</label>
                     <div class="col-sm-6">
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
                </div>
                </div>
                <div class="dua col-sm-6">
                                  <div class="form-group row">
                  <label for="kode guru" class="col-sm-3-from-label"> Kode Guru</label>
                  <div class="col-sm-6">
                  <input type="text" name="kode guru" style="margin-left: 33px">
                  </div>
                </div>
                <div class="form-group row">
                    <label for="Pelajaran" class="col-sm-3 col-form-label">Hadir</label>
                     <div class="col-sm-6">
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
                </div>
                <div class="form-group row">
                    <label for="Pelajaran" class="col-sm-3 col-form-label">Absen</label>
                     <div class="col-sm-6">
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
                </div>
                <div class="form-group row">
                    <label for="Pelajaran" class="col-sm-3 col-form-label">Jumlah</label>
                     <div class="col-sm-6">
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
                    <div class="form-group row">
                      <label for="Uraian Pelajaran" class="col-sm-5 col-form-label">Uraian Pelajaran</label>
                       <div class="col-sm-6">
                      <textarea >Uraian</textarea>
                      </div>
                    </div>              
                </div>
                </div>

                
                <!-- /.card-body -->
                <div class="card-footer" style="margin-left: 70%">
                 <a href="<?php echo site_url('Admin/tabel_data');?>" style="color : white; "> <button type="submit" class="btn btn-info">Simpan</a></button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <?= form_close() ?>
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
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('asset/dist/js/demo.js');?>"></script>
<script src="<?php echo base_url('asset/dist/js/demo.js');?>"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>