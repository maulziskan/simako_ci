<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Input Master Sekolah</h4>
			</div>
			<div class="panel-body">
				<form method="post" action="sekolah_aksi.php">
					<div class="form-group">
						<label>Kode Sekolah</label>
						<input type="text" class="form-control" maxlength="4" name="id_sekolah" placeholder="Masukkan Kode Sekolah" required>
					</div>
					<div class="form-group">
						<label>Nama Sekolah</label>
						<input type="text" class="form-control" name="nama_sekolah" placeholder="Masukkan Nama Sekolah">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat_sekolah" placeholder="Masukkan Alamat">
					</div>
					<div class="form-group">
						<label>Nama Yayasan</label>
						<input type="text" class="form-control" name="nama_yayasan" placeholder="Masukkan Nama Yayasan">
					</div>
					<div class="form-group">
						<label>No. Registrasi</label>
						<input type="text" min="0" class="form-control" name="no_registrasi" placeholder="Masukkan No. Registrasi">
					</div>
					<div class="form-group">
						<label>No. Telepon</label>
						<input type="text" min="0" class="form-control" name="no_telp" placeholder="Masukkan No. Telepon">
					</div>
					<div class="form-group">
						<label>No. Handphone</label>
						<input type="text" min="0" class="form-control" name="no_hp" placeholder="Masukkan No. Handphone">
					</div>
					<div class="form-group">
						<label>Alamat email</label>
						<input type="email" class="form-control" name="email_sekolah" placeholder="Masukkan Alamat email">
					</div>
					<div class="form-group">
						<label>NPWP</label>
						<input type="text" class="form-control" name="npwp" placeholder="Masukkan NPWP">
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
