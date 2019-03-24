<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="author" content="maulziskan">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Sistem Manajemen Sekolah Pride HS</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/logo.png">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</head>
<body style="background: #b0b3b7">

  <?php
  //session_start();
  if($_SESSION['posisi']!="admin"){
    header("location:../index.php?pesan=belum_login");
  }
  ?>

  <nav class="navbar navbar-inverse" style="border-radius: 0px">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <img src="<?php echo base_url(); ?>images/logo.png" alt="logo" style="width: 25px;height: 25px;border: 0px;">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url("Admin/"); ?>index"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="glyphicon glyphicon-user"></i> Data Master <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url("Admin/"); ?>kelas_ms">Master Kelas</a></li>
                  <li><a href="<?php echo base_url("Admin/"); ?>mapel_ms">Master Mata Pelajaran</a></li>
                  <li><a href="<?php echo base_url("Admin/"); ?>walimurid_ms">Master Wali Murid</a></li>
                  <li><a href="<?php echo base_url("Admin/"); ?>siswa_ms">Master Siswa</a></li>
              </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button
            aria-haspopup="true" aria-expanded="false">
            <i class="glyphicon glyphicon-blackboard"></i> Data Sekolah<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url("Admin/"); ?>karyawan_ms">Master Karyawan</a></li>
                  <li><a href="<?php echo base_url("Admin/"); ?>guru_ms">Master Guru</a></li>
                  <li><a href="<?php echo base_url("Admin/"); ?>sekolah_ms">Master Sekolah</a></li>
              </ul>
          </li>
          <li><a href="<?php echo base_url("Admin/"); ?>belajarharian"><i class="glyphicon glyphicon-scale"></i> Kegiatan Belajar</a></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button
            aria-haspopup="true" aria-expanded="false">
            <i class="glyphicon glyphicon-blackboard"></i> Laporan<span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a target="_blank" href="<?php echo base_url("Admin/kelas_report"); ?>">Laporan Data Kelas</a></li>
                  <li><a target="_blank" href="<?php echo base_url("Admin/mapel_report"); ?>">Laporan Data Mata Pelajaran</a></li>
                  <li><a target="_blank" href="<?php echo base_url("Admin/walimurid_report"); ?>">Laporan Data Orang Tua/Wali</a></li>
                  <li><a target="_blank" href="<?php echo base_url("Admin/siswa_report"); ?>">Laporan Data Siswa</a></li>
                  <li><a target="_blank" href="<?php echo base_url("Admin/karyawan_report"); ?>">Laporan Data Karyawan</a></li>
                  <li><a target="_blank" href="<?php echo base_url("Admin/guru_report"); ?>">Laporan Data Guru</a></li>
                  <li><a target="_blank" href="<?php echo base_url("Admin/sekolah_report"); ?>">Laporan Data Sekolah</a></li>
                  <li><a target="_blank" href="<?php echo base_url("Admin/belajarharian_report"); ?>">Laporan Kegiatan Belajar Harian</a></li>
              </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
              <li><p class="navbar-text">Hallo, <b><?php echo $_SESSION['nama_user']; ?></b> !</p></li>
              <li><a href="<?php echo base_url("Admin/"); ?>logout"><i class="glyphicon glyphicon-log-out"></i>Log Out</a></li>
        </ul>


      </div>
    </div>
  </nav>
  

            