<?php
include '../koneksi.php';

$id_sekolah=$_POST['id_sekolah'];
$nama_sekolah=$_POST['nama_sekolah'];
$alamat_sekolah=$_POST['alamat_sekolah'];
$nama_yayasan=$_POST['nama_yayasan'];
$no_registrasi=$_POST['no_registrasi'];
$no_telp=$_POST['no_telp'];
$no_hp=$_POST['no_hp'];
$email_sekolah=$_POST['email_sekolah'];
$npwp=$_POST['npwp'];

mysqli_query($koneksi,"insert into ms_sekolah values ('$id_sekolah','$nama_sekolah','$alamat_sekolah','$nama_yayasan','$no_registrasi',$no_telp','$no_hp','$email_sekolah','$npwp')");

header("location:sekolah_ms.php");

?>