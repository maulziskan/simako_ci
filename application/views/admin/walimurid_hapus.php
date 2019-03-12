<?php
include '../koneksi.php';

$id=$_GET['id'];

mysqli_query($koneksi,"delete from ms_walimurid where id_walimurid='$id'");

header("location:walimurid_ms.php");

?>