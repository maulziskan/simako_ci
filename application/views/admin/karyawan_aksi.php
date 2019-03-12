<?php
include '../koneksi.php';

$id_karyawan=$_POST['id_karyawan'];
$nama_karyawan=$_POST['nama_karyawan'];
$alamat_karyawan=$_POST['alamat_karyawan'];
$no_telp=$_POST['no_telp'];
$no_hp=$_POST['no_hp'];
$email_karyawan=$_POST['email_karyawan'];
$status_kerja=$_POST['status_kerja'];
$jabatan=$_POST['jabatan'];
$foto_karyawan=$_POST['foto_karyawan'];
$agama=$_POST['agama'];


mysqli_query($koneksi,"insert into ms_karyawan values ('$id_karyawan','$nama_karyawan','$alamat_karyawan','$no_telp','$no_hp','$email_karyawan','$status_kerja','$jabatan','$foto_karyawan','$agama')");

header("location:karyawan_ms.php");

?>