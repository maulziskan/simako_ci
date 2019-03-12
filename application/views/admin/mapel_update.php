<?php
include '../koneksi.php';

$id=$_POST['id'];
$nama_mapel=$_POST['nama_mapel'];
$jenjang=$_POST['jenjang'];

mysqli_query($koneksi,"update ms_mapel set nama_mapel='$nama_mapel',jenjang='$jenjang' where id_mapel='$id' ");

header("location:mapel_ms.php");

?>