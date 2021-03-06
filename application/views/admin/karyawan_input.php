<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Input Master Karyawan</h4>
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo base_url("Admin/karyawan_aksi");?>" enctype='multipart/form-data' >
					<div class="form-group">
						<label>Kode Karyawan</label>
						<input type="text" class="form-control" maxlength="12" name="id_karyawan" placeholder="Masukkan Kode Karyawan" required>
					</div>
					<div class="form-group">
						<label>Nama Karyawan</label>
						<input type="text" class="form-control" name="nama_karyawan" placeholder="Masukkan Nama Orang Tua">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat_karyawan" placeholder="Masukkan Alamat">
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
						<input type="email" class="form-control" name="email_karyawan" placeholder="Masukkan Alamat email">
					</div>
					<div class="form-group">
						<label>Status Pekerjaan</label>
						<select name="status_kerja" class="form-control">
								<option value="Karyawan Tetap">Karyawan Tetap</option>
  								<option value="Karyawan Kontrak">Karyawan Kontrak</option>
  								<option value="Karyawan Alih Daya">Karyawan Alih Daya</option>
  						</select>
						</div>
					<div class="form-group">
						<label>Jabatan</label>
						<input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan">
					</div>
					<div class="form-group">
						<label>Foto Karyawan</label>
						<input type="file" class="form-control" name="foto_karyawan" placeholder="Masukkan Foto Karyawan">
					</div>
					<div class="form-group">
						<label>Agama</label>
						<select name="agama" class="form-control">
								<option value="Islam">Islam</option>
  								<option value="Katolik">Katolik</option>
  								<option value="Protestan">Protestan</option>
  								<option value="Hindhu">Hindhu</option>
  								<option value="Budha">Budha</option>
  								<option value="Kong Hu chu">Kong Hu Chu</option>
						</select>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-control">
								<option value="L">Pria</option>
  								<option value="P">Wanita</option>
  						</select>
					</div>
					<div class="form-group">
						<label>Tempat Lahir</label>
						<input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Nama Kota">
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control" name="tgl_lahir">
					</div>
					<div class="form-group">
						<label>Pendidikan Terakhir</label>
						<input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Masukkan Pendidikan Terakhir">
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
