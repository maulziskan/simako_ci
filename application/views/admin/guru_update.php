<?php
include '../koneksi.php';

$id=$_POST['id'];
$nama_guru=$_POST['nama_guru'];
$alamat_guru=$_POST['alamat_guru'];
$no_telp=$_POST['no_telp'];
$no_hp=$_POST['no_hp'];
$email_guru=$_POST['email_guru'];
$id_karyawan=$_POST['id_karyawan'];
$jenjang_pendidikan=$_POST['jenjang_pendidikan'];

mysqli_query($koneksi,"update ms_guru set nama_guru='$nama_guru',alamat_guru='$alamat_guru',no_telp='$no_telp',no_hp='$no_hp',email_guru='$email_guru',id_karyawan='$id_karyawan',jenjang_pendidikan='$jenjang_pendidikan' where id_guru='$id' ");

header("location:guru_ms.php");

?>