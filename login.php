<?php
session_start();
if (isset($_SESSION['username'])) {
  header("location:boxed.html");
}
if (isset($_POST['username'])) {
  include "koneksi.php";
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query="select * from user where username='$username' and password= '$password'";
  $hasil =mysqli_query($koneksi,$query);
  if (mysqli_num_row($hasil)) {
    $detail = mysqli_fetch_array($hasil);
    $_SESSION['username']=$username;
    $_SESSION['nama']=$detail['nama'];
    mysqli_close($koneksi);
    header("location: boxed.html");
  }else  {
    $pesan_erorr = "<p><strong>Login SaLah.</strong>Silaka uLang.</p>";
  }
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>AdminLTE 3 | Log in</title> -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style type="text/css">
    input[type="username"]::placeholder, input[type="password"]::placeholder{
      color : black;
      font-weight: bolder;
    } 
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html">
      <b style="font-family: Consolas">Aplikasi<br></b>
      <span style="font-family:Consolas ">PKBW<b></span>
        <br>
        <span style="font-size:15px;font-family: arial">Perkembangan Kelas Berbasis Web</span>
        <b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg" style="font-family: Times New Roman" style="font-size: 200%"><b>L<span style="color: red">O</span>GIN</p></b>

      <form action=" boxed.html" method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control" placeholder="Username" style="text-align: center;
          background-color: deepskyblue;font-family: joker">
          <div class="input-group-append">
          
          </div>
        </div>
        <div class="input-group mb-3" >
          <input type="password" class="form-control" placeholder="Password"style="text-align: center;
          background-color: deepskyblue;font-family: joker">
         
        </div>
        <div class="row">
          <div class="col-8">
      
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
