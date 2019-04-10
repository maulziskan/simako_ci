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
				<form method="post" action="<?php echo base_url("Admin/guru_aksi");?>">
					<div class="form-group">
						<label>Kode Guru</label>
						<input type="text" class="form-control" maxlength="4" name="id_guru" placeholder="Masukkan Kode Guru" required>
					</div>
					<div class="form-group">
						<label>Nama Guru</label>
						<input type="text" class="form-control" name="nama_guru" placeholder="Masukkan Nama Guru">
					</div>
					<div class="form-group">
						<label>Kode Karyawan</label>
						<select name="id_karyawan" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_karyawan as $k){
								echo "<option value='".$k->id_karyawan."'>".$k->id_karyawan." - ".$k->nama_karyawan."</option>";
							}
							?>
						</select>
						
		    		</div>
					<div class="form-group">
						<label>Mata Pelajaran</label>
						<input type="text" class="form-control" name="mapel" placeholder="Masukkan Mata Pelajaran">
					</div>
					<div class="form-group">
						<label>Kelas</label>
						<input type="text" class="form-control" name="kelas" placeholder="Masukkan Kelas">
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
