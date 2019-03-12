<?php
include '../koneksi.php';

$id_kelas=$_POST['id_kelas'];
$nama_kelas=$_POST['nama_kelas'];
$jenjang=$_POST['jenjang'];

mysqli_query($koneksi,"insert into ms_kelas values ('$id_kelas','$nama_kelas','$jenjang')");

header("location:kelas_ms.php");

?>

