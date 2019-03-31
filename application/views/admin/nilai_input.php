<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Input Master Nilai</h4>
			</div>
			<div class="panel-body">
				<form method="post" action="<?php echo base_url("Admin/nilai_aksi"); ?>">
					<div class="form-group">
						<label>Nilai</label>
						<input type="text" class="form-control" name="id_nilai" placeholder="Masukkan nilai" required>
					</div>
					<div class="form-group">
						<label>Nama Nilai</label>
						<input type="text" class="form-control" name="nama_nilai" placeholder="Masukkan Nama nilai" required>
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