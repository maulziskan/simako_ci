<?php
include '../koneksi.php';

$id_mapel=$_POST['id_mapel'];
$nama_mapel=$_POST['nama_mapel'];
$jenjang=$_POST['jenjang'];

mysqli_query($koneksi,"insert into ms_mapel values ('$id_mapel','$nama_mapel','$jenjang')");

header("location:mapel_ms.php");

?>