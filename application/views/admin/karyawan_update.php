<?php
include '../koneksi.php';

$id=$_POST['id'];
$nama_karyawan=$_POST['nama_karyawan'];
$alamat_karyawan=$_POST['alamat_karyawan'];
$no_telp=$_POST['no_telp'];
$no_hp=$_POST['no_hp'];
$email_karyawan=$_POST['email_karyawan'];
$status_kerja=$_POST['status_kerja'];
$jabatan=$_POST['jabatan'];
$foto_karyawan=$_POST['foto_karyawan'];
$agama=$_POST['agama'];

mysqli_query($koneksi,"update ms_karyawan set nama_karyawan='$nama_karyawan',alamat_karyawan='$alamat_karyawan',no_telp='$no_telp',no_hp='$no_hp',email_karyawan='$email_karyawan',status_kerja='$status_kerja',jabatan='$jabatan',foto_karyawan='$foto_karyawan',agama='$agama' where id_karyawan='$id' ");

header("location:karyawan_ms.php");

?>