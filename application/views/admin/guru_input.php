<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Input Master Guru</h4>
			</div>
			<div class="panel-body">
				<form method="post" action="guru_aksi.php">
					<div class="form-group">
						<label>Kode Guru</label>
						<input type="text" class="form-control" maxlength="4" name="id_guru" placeholder="Masukkan Kode Guru" required>
					</div>
					<div class="form-group">
						<label>Nama Guru</label>
						<input type="text" class="form-control" name="nama_guru" placeholder="Masukkan Nama Guru">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat_guru" placeholder="Masukkan Alamat">
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
						<input type="email" class="form-control" name="email_guru" placeholder="Masukkan Alamat email">
					</div>
					<div class="form-group">
						<label>Kode Karyawan</label>
						<select name="id_karyawan" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							include "koneksi.php";

							$query=mysqli_query($koneksi,"select * from ms_karyawan");

							while ($data=mysqli_fetch_array($query)){
								echo "<option value='".$data['id_karyawan']."'>".$data['id_karyawan']." - ".$data['nama_karyawan']."</option>";
							}
							?>
							</select>
					</div>
					<div class="form-group">
						<label>Pendidikan Terakhir</label>
						<input type="text" class="form-control" name="jenjang_pendidikan" placeholder="Masukkan Pendidikan Terakhir">
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
