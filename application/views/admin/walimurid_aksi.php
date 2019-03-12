<?php
include '../koneksi.php';

$id_walimurid=$_POST['id_walimurid'];
$nama_walimurid=$_POST['nama_walimurid'];
$alamat_walimurid=$_POST['alamat_walimurid'];
$hubungan_kerabat=$_POST['hubungan_kerabat'];
$no_telp=$_POST['no_telp'];
$no_hp=$_POST['no_hp'];
$email_walimurid=$_POST['email_walimurid'];
$pekerjaan=$_POST['pekerjaan'];

mysqli_query($koneksi,"insert into ms_walimurid values ('$id_walimurid','$nama_walimurid','$alamat_walimurid','$hubungan_kerabat','$no_telp','$no_hp','$email_walimurid','$pekerjaan')");

header("location:walimurid_ms.php");

?>