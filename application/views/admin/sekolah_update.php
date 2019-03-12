<?php
include '../koneksi.php';

$id=$_POST['id'];
$nama_walimurid=$_POST['nama_walimurid'];
$alamat_walimurid=$_POST['alamat_walimurid'];
$hubungan_kerabat=$_POST['hubungan_kerabat'];
$no_telp=$_POST['no_telp'];
$no_hp=$_POST['no_hp'];
$email_walimurid=$_POST['email_walimurid'];
$pekerjaan=$_POST['pekerjaan'];

mysqli_query($koneksi,"update ms_walimurid set nama_walimurid='$nama_walimurid',alamat_walimurid='$alamat_walimurid',hubungan_kerabat='$hubungan_kerabat',no_telp='$no_telp',no_hp='$no_hp',email_walimurid='$email_walimurid',pekerjaan='$pekerjaan' where id_walimurid='$id' ");

header("location:walimurid_ms.php");

?>