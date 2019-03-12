<?php
//mengaktifkan session_start
session_start();

//menghapus semua session yang Anda
session_destroy();

//mengalihkan halaman kembali ke halaman login dan kirim pesan logout ke url
header("location:../index.php?pesan=logout");
 ?>
