<?php
include '../koneksi.php';

$id=$_GET['id'];

mysqli_query($koneksi,"delete from ms_mapel where id_mapel='$id'");

header("location:mapel_ms.php");

?>