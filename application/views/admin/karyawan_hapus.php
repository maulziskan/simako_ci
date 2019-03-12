<?php
include '../koneksi.php';

$id=$_GET['id'];

mysqli_query($koneksi,"delete from ms_karyawan where id_karyawan='$id'");

header("location:karyawan_ms.php");

?>