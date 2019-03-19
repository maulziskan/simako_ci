<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	
		<div class="col-sm-12">
			<div class="panel">
				<div class="panel-heading">
					<h4><center>Input Master Siswa</center></h4>
				</div>
			</div>
		</div>
		
	<form class="form-horizontal" method="post" action="siswa_aksi.php" enctype="multipart/form-data">
		<div class="col-sm-6">
			<div class="panel">
				<div class="panel-body">
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">No. Induk Siswa</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" maxlength="12" name="id_siswa" placeholder="Ketik No. Induk Siswa" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Nama Lengkap Siswa</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="nama_siswa" placeholder="Ketik Nama Siswa" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">ID Orang Tua/Wali</label>
						<div class="col-sm-8">
							<select name="id_walimurid" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							include "../koneksi.php";

							$queryw=mysqli_query($koneksi,"select * from ms_walimurid");

							while ($dataw=mysqli_fetch_array($queryw)){
								echo "<option value='".$dataw['id_walimurid']."'>".$dataw['id_walimurid']." - ".$dataw['nama_walimurid']."</option>";
							}
							?>
						</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">ID Sekolah</label>
						<div class="col-sm-8">
							<select name="id_sekolah" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							include "koneksi.php";

							$querys=mysqli_query($koneksi,"select * from ms_sekolah");

							while ($datas=mysqli_fetch_array($querys)){
								echo "<option value='".$datas['id_sekolah']."'>".$datas['id_sekolah']." - ".$datas['nama_sekolah']."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">ID Kelas</label>
						<div class="col-sm-8">
							<select name="id_kelas" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							include "koneksi.php";

							$queryk=mysqli_query($koneksi,"select * from ms_kelas");

							while ($datak=mysqli_fetch_array($queryk)){
								echo "<option value='".$datak['id_kelas']."'>".$datak['id_kelas']." - ".$datak['nama_kelas']."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Jenis Kelamin</label>
						<div class="col-sm-8">
							<select name="jenis_kelamin" class="form-control">
								<option value="Laki-laki">Laki-laki</option>
  								<option value="Perempuan">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Tempat Lahir</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="tempat_lahir" placeholder="Ketik Kota Kelahiran Siswa" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Tanggal Lahir</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" name="tgl_lahir" required>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="panel">
				<div class="panel-body">
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">NISN</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="nisn" placeholder="Ketik NISN" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">NIK</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" maxlength="16" name="nik" placeholder="Ketik NIK" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Agama</label>
						<div class="col-sm-8">
							<select name="agama" class="form-control">
								<option value="Islam">Islam</option>
  								<option value="Katolik">Katolik</option>
  								<option value="Protestan">Protestan</option>
  								<option value="Hindhu">Hindhu</option>
  								<option value="Budha">Budha</option>
  								<option value="Kong Hu chu">Kong Hu Chu</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Asal Sekolah</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="asal_sekolah" placeholder="Ketik Asal Sekolah" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Tanggal Registrasi</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" name="tgl_daftar" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Daftar di Kelas</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="kelas_daftar" placeholder="Ketik Kelas" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Upload Foto Siswa</label>
						<div class="col-sm-8">
							<input type="file" class="form-control" name="foto_siswa">
						</div>
					</div>
					<input type="submit" class="btn btn-primary" value="simpan">
					<input type="reset" class="btn btn-warning" value="cancel">
				</div>
			</div>
		</div>
	</form>
</div>




