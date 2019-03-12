<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sistem Manajemen Sekolah Pride HS</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<link rel="icon" type="image/png" href="images/logo.png">
</head>
<body style="background: #cfd2d6">
	<br/>
	<br/>
	<center>
		<img src="images/logo.png" alt="Form Login" style="width: 180px;height: 128px;">
		<h3 style="font-family: verdana;">Sistem Manajemen Sekolah Pride HS</h3>
	</center>
	<br/>
	<br/>
	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<?php
if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
    echo "<div class='alert alert-danger'>Login gagal! username atau password salah!</div>";
  }else if($_GET['pesan']=="logout"){
    echo "<div class='alert alert-info'>Anda telah berhasil logout</div>";
  }else if($_GET['pesan']=="belum_login"){
    echo "<div class='alert alert-danger'>Anda harus login untuk akses ke halaman admin</div>";
  }
}
if ($this->session->userdata("posisi") == "admin") {
	redirect ("Admin");
}
       ?>

			<?php echo form_open("Auth/cek_login"); ?>
				<div class="panel">
					<br/>
					<div class="panel-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" class="form-control" name="nama_user">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>
					<input type="submit" class="btn btn-primary" name="Login" value="Login">
				<?php echo form_close(); ?>
				</div>
				<br/>
			</div>
		</form>
	</div>
</div>
</body>
</html>
