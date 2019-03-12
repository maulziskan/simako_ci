<?php
include '../koneksi.php';

$id=$_GET['id'];

mysqli_query($koneksi,"delete from ms_sekolah where id_sekolah='$id'");

header("location:sekolah_ms.php");

?>