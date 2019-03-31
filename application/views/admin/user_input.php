<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Input Master User</h4>
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo base_url("Admin/user_aksi");?>">
					<div class="form-group">
						<label>User ID</label>
						<input type="text" class="form-control" maxlength="4" name="kd_user" placeholder="Masukkan Kode User" required>
					</div>
					<div class="form-group">
						<label>Nama User</label>
						<input type="text" class="form-control" name="nama_user" placeholder="Masukkan Nama User">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
						<label>Posisi</label>
						<select name="posisi" class="form-control">
								<option value="admin">Administrator</option>
								<option value="user">User</option>
								<option value="guru">Guru</option>
								<option value="walimurid">Orang Tua/Wali</option>
						</select>
					</div>
					
					<br/>

					<input type="submit" class="btn btn-primary" value="Simpan">
				</form>
			</div>
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>
