<?php
include '../koneksi.php';

$id=$_GET['id'];

mysqli_query($koneksi,"delete from ms_guru where id_guru='$id'");

header("location:guru_ms.php");

?>