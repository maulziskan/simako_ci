<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Input Master Kelas</h4>
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo base_url("Admin/"); ?>kelas_aksi">
					<div class="form-group">
						<label>Kelas</label>
						<input type="text" class="form-control" name="id_kelas" placeholder="Masukkan Kelas" required>
					</div>
					<div class="form-group">
						<label>Nama Kelas</label>
						<input type="text" class="form-control" name="nama_kelas" placeholder="Masukkan Nama kelas" required>
					</div>
					<div class="form-group">
						<label>Jenjang</label>
						<input type="text" class="form-control" name="jenjang" placeholder="Masukkan jenjang pendidikan" required>
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