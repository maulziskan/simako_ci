<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Input Master Mata Pelajaran</h4>
			</div>
			<div class="panel-body">
				<form method="post" action="mapel_aksi.php">
					<div class="form-group">
						<label>Kode Mata Pelajaran</label>
						<input type="text" class="form-control" maxlength="4" name="id_mapel" placeholder="Masukkan Kode Mata Pelajaran" required>
					</div>
					<div class="form-group">
						<label>Nama Mata Pelajaran</label>
						<input type="text" class="form-control" name="nama_mapel" placeholder="Masukkan Nama Mata Pelajaran">
					</div>
					<div class="form-group">
						<label>Jenjang Pendidikan</label>
						<input type="text" class="form-control" name="jenjang" placeholder="Masukkan Jenjang Pendidikan">
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
