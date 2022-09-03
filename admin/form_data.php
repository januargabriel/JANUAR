<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Anak RPL | Manajemen Data</title>

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
  <style type="text/css">
    aside{
  font-family:"Times New Roman";
}
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: LightSteelBlue">
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
  <div class="content-wrapper" style="width: 88%">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="font-family: Times New Roman;text-align: center;padding-left: 120px">Tampilan Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="#"> LayOut</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

            <div class="card" style="background-color: LightSteelBlue">
              <!-- /.card-header -->
              <div class="card-body">
                <table border="1">
                  <div class="form-group row">
                    <label for="input" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                    <div class="col-sm-3">
                      <select id="thn_ajaran" name="thn_ajaran" class="form-control">
                        <option value="">Pilih Tahun</option>
                        <?php
                        $query2 = mysqli_query("SELECT * FROM thn_ajaran ORDER BY thn_ajaran.thn_ajaran");
                         foreach ($datathn as $key => $row) {
                          ?>
                          <option id="thn_ajaran" class="<?php echo $row['thn_ajaran']; ?>" value="<?php echo $row['kode_thn']; ?>"> <?php echo $row['thn_ajaran']; ?>
                          </option>
                          <?php
                         }
                        ?>
                      </select>
                    </div>
                    <div class="form-group row">
                    <label for="input" class="col-sm-4 col-form-label">Jurusan</label>
                    <div class="col-sm-8">
                      <select id="jurusan" name="nama_jurusan" class="form-control">
                        <option value="">Pilih Jurusan</option>
                        <?php
                        $query2 = mysqli_query("SELECT * FROM jurusan ORDER BY jurusan.nama_jurusan");
                         foreach ($datajurusan as $key => $row) {
                          ?>
                          <option id="jurusan" class="<?php echo $row['Id_jurusan']; ?>" value="<?php echo $row['kode_jurusan']; ?>"> <?php echo $row['nama_jurusan']; ?>
                          </option>
                          <?php
                         }
                        ?>
                      </select>
                    </div>
                  </div>
                  </div>
                  <div class="form-group row">
                    <label for="input" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-3">
                      <select id="kelas" name="nama_kelas" class="form-control">
                        <option value="">Pilih Kelas</option>
                        <?php
                        $query2 = mysqli_query("SELECT * FROM kelas ORDER BY kelas.nama_kelas");
                         foreach ($datakls as $key => $row) {
                          ?>
                          <option id="kelas" class="<?php echo $row['nama_kelas']; ?>" value="<?php echo $row['kode_kelas']; ?>"> <?php echo $row['nama_kelas']; ?>
                          </option>
                          <?php
                         }
                        ?>
                      </select>
                    </div>
                    <div class="form-group row">
                    <label for="Pelajaran" class="col-sm-4 col-form-label">Mapel</label>
                     <div class="col-sm-8">
                       <select id="mapel" name="mapel" class="form-control">
                        <option value="">Pilih Mapel</option>
                        <?php
                         // $query = mysqli_query("SELECT * FROM data_guru INNER JOIN mapel ON data_guru.Id_mapel=mapel.Id_mapel ORDER BY mapel.nama_mapel");
                        $query2 = mysqli_query("SELECT * FROM mapel ORDER BY mapel.nama_mapel");
                         // print_r(mysqli_fetch_array($query2));
                         foreach ($datamapel as $key => $value) {
                          ?>
                          <option id="kode" class="<?php echo $value['Id_mapel']; ?>" value="<?php echo $value['kode']; ?>"><?php echo $value['nama_mapel']; ?>
                          </option>
                          <?php
                         }
                        ?>
                      </select>
                    </div>          
                </div>
                  </div>
                  <div class="form-group row">
                    <label for="input" class="col-sm-2 col-form-label">Nama Guru</label>
                    <div class="col-sm-3">
                      <select id="data_guru" name="nama_guru" class="form-control">
                        <option value="">Pilih Guru</option>
                        <?php
                        $query2 = mysqli_query("SELECT * FROM data_guru ORDER BY data_guru.nama_guru");
                         foreach ($dataguru as $key => $row) {
                          ?>
                          <option id="data_guru" class="<?php echo $row['nama_guru']; ?>" value="<?php echo $row['kode_guru']; ?>"> <?php echo $row['nama_guru']; ?>
                          </option>
                          <?php
                         }
                        ?>
                      </select>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </table>
                <table id="example1" class="table table-bordered table-striped">
                  
                  <thead style="text-align: center;">
                     
                  <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>Jam Pel</th>
                    <th>Mapel</th>
                    <th>Guru Mengajar</th>
                    <th>Guru Pengganti</th>
                    <th>Hadir</th>
                    <th>Absen</th>
                    <th>Jumlah</th>
                    <th>Uraian Pelajaran</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    $sql="SELECT * FROM data";
                    $dts=$this->db->query($sql);
                    foreach ($dts->result() as $row) { 
                     ?>
                    <tr style="text-align: center;">
                    <td><?php echo $c=$c+1 ; ?></td>
                    <td><?php echo $row->hari ; ?></td>
                    <td><?php echo $row->tanggal ; ?></td>
                    <td><?php echo $row->jam_pel ; ?></td>
                    <td><?php echo $row->nama_mapel ; ?></td>
                    <td><?php echo $row->nama_guru ; ?></td>
                    <td><?php echo $row->guru_piket ; ?></td>
                    <td><?php echo $row->hadir ; ?></td>
                    <td><?php echo $row->absen ; ?></td>
                    <td><?php echo $row->jumlah; ?></td>
                    <td><?php echo $row->uraian; ?></td>
                    <td style="background-color: white; ">
                      <a href="<?php echo site_url('Admin/edit_tabel_data/<?php echo $row->Id_data ?>');?>"><span class="btn btn-primary" style="margin-left: 10px">&nbsp;Edit</span></a>
                       <a href="<?php echo site_url('Admin/delete_tabel_data/<?php echo $row->Id_data ?>');?>"><span class="btn btn-danger" style="color : white; margin-left: 10px">Hapus</span></a>
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
