<?php
include 'koneksi.php';

$id_siswa=$_POST['id_siswa'];
$nama_siswa=$_POST['nama_siswa'];
$id_walimurid=$_POST['id_walimurid'];
$id_sekolah=$_POST['id_sekolah'];
$id_kelas=$_POST['id_kelas'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$nisn=$_POST['nisn'];
$nik=$_POST['nik'];
$agama=$_POST['agama'];
$asal_sekolah=$_POST['asal_sekolah'];
$tgl_daftar=$_POST['tgl_daftar'];
$kelas_daftar=$_POST['kelas_daftar'];

mysqli_query($koneksi,"insert into ms_barang values ('$id_siswa','$kd_kelompokbarang','$kd_supplier','$nama_siswa','$satuan','$isi','$harga_beli','$hpp','$harga_jual')");

header("location:ms_barang.php");

?>