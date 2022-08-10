<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo base_url('asset/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('asset/dist/css/adminlte.min.css');?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url('Page/guru');?>" class="nav-link">Home</a>
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('asset/dist/img/AdminLTELogo.png ');?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">APK PKBW</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    
          <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                MENGISI DATA
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('User/jurusan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KELAS X</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('User/jurusan');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KELAS XI</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('User/jurusan');?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KELAS XII</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('User/tampil');?>" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                TAMPILAN DATA
                <!--<span class="badge badge-info right">2</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
                  <a href="<?php echo site_url('Login/logout');?>" class="nav-link">
                    <i class="nav-icon fas fa-power-off" aria-hidden="true"></i>
                    <p>
                      LOG OUT
                    </p>
                  </a>
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
            <h1 style="font-family: Times New Roman;text-align: center;padding-left: 120px">Tampilan Data</h1>
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
    <section class="content" >
      <div class="container-fluid">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead style="text-align: center;">
                  <tr>
                   <th >Hari</th>
                    <th >Tanggal</th>
                    <th>Jam Pel</th>
                    <th>Mapel</th>
                    <th>Guru Mengajar</th>
                    <th>Guru Pengganti</th>
                    <th>Hadir</th>
                    <th>Absen</th>
                    <th>Jumlah</th>
                    <th>Uraian pelajaran</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $c=0;
                      foreach($tabel_data as $row) {
                      ?>
                    <tr>
                    <td><?php echo $c=$c+1 ; ?></td>
                    <td><?php echo $row->hari ; ?></td>
                    <td><?php echo $row->tanggal ; ?></td>
                    <td><?php echo $row->jam_pel ; ?></td>
                    <td><?php echo $row->mapel ; ?></td>
                    <td><?php echo $row->nama_guru ; ?></td>
                    <td><?php echo $row->guru_piket ; ?></td>
                    <td><?php echo $row->hadir ; ?></td>
                    <td><?php echo $row->absen ; ?></td>
                    <td><?php echo $row->jumlah; ?></td>
                    <td><?php echo $row->uraian; ?></td>
                    <td style="background-color: white; ">
                      <a href="<?php echo site_url('Admin/edit_tabel_data/<?php echo $row->Id_data ?>');?>"><span class="btn btn-primary" style="margin-left: 10px">&nbsp;Edit</span></a>
                    </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
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
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('asset/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-buttons/js/dataTables.buttons.min.js');?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('asset/plugins/jszip/jszip.min.js');?>"></script>
<script src="<?php echo base_url('asset/plugins/pdfmake/pdfmake.min.js');?>"></script>
<script src="<?php echo base_url('asset/plugins/pdfmake/vfs_fonts.js');?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-buttons/js/buttons.html5.min.js');?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-buttons/js/buttons.print.min.js');?>"></script>
<script src="<?php echo base_url('asset/plugins/datatables-buttons/js/buttons.colVis.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('asset/dist/js/demo.js');?>"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
