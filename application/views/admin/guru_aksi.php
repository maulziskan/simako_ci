<?php
include '../koneksi.php';

$id_guru=$_POST['id_guru'];
$nama_guru=$_POST['nama_guru'];
$alamat_guru=$_POST['alamat_guru'];
$no_telp=$_POST['no_telp'];
$no_hp=$_POST['no_hp'];
$email_guru=$_POST['email_guru'];
$id_karyawan=$_POST['id_karyawan'];
$jenjang_pendidikan=$_POST['jenjang_pendidikan'];

mysqli_query($koneksi,"insert into ms_guru values ('$id_guru','$nama_guru','$alamat_guru','$no_telp','$no_hp','$email_guru','$id_karyawan','$jenjang_pendidikan')");

header("location:guru_ms.php");

?>