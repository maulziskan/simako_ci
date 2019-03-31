<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Input Master Wali Murid</h4>
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo base_url("Admin/walimurid_aksi");?>">
					<div class="form-group">
						<label>Kode Wali Murid</label>
						<input type="text" class="form-control" maxlength="4" name="id_walimurid" placeholder="Masukkan Kode Wali Murid" required>
					</div>
					<div class="form-group">
						<label>Nama wali Murid</label>
						<input type="text" class="form-control" name="nama_walimurid" placeholder="Masukkan Nama Orang Tua">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat_walimurid" placeholder="Masukkan Alamat">
					</div>
					<div class="form-group">
						<label>Hubungan Dengan Siswa</label>
						<input type="text" class="form-control" name="hubungan_kerabat" placeholder="Masukkan Hubungan Kerabat">
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
						<input type="email" class="form-control" name="email_walimurid" placeholder="Masukkan Alamat email">
					</div>
					<div class="form-group">
						<label>Pekerjaan</label>
						<input type="text" class="form-control" name="pekerjaan" placeholder="Masukkan Pekerjaan Orang Tua">
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
