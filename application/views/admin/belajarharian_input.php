<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	
		<div class="col-sm-12">
			<div class="panel">
				<div class="panel-heading">
					<h4><center>Input Kegiatan Belajar Mengajar</center></h4>
				</div>
			</div>
		</div>
		
	<form class="form-horizontal" method="post" action="<?php echo base_url("Admin/belajarharian_aksi");?>" enctype="multipart/form-data">
		<div class="col-sm-6">
			<div class="panel">
				<div class="panel-body">
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">No. belajarharian</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" maxlength="14" name="id_belajarharian" value="<?= $id_belajaroto; ?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Kode Guru</label>
						<div class="col-sm-8">
						<select name="id_guru" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_guru as $g){
								echo "<option value='".$g->id_guru."'>".$g->id_guru." - ".$g->nama_guru."</option>";
							}
							?>
						</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Kelas</label>
						<div class="col-sm-8">
							<select name="id_kelas" class="form-control">
								<option value="" selected="selected">-</option>
								<?php
								foreach($ms_kelas as $k){
								echo "<option value='".$k->id_kelas."'>".$k->id_kelas." - ".$k->nama_kelas."</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">No. Induk Siswa</label>
						<div class="col-sm-8">
							<select name="id_siswa" class="form-control">
								<option value="" selected="selected">-</option>
								<?php
								foreach($ms_siswa as $s){
								echo "<option value='".$s->id_siswa."'>".$s->id_siswa." - ".$s->nama_siswa."</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Kode Mata Pelajaran</label>
						<div class="col-sm-8">
							<select name="id_mapel" class="form-control">
								<option value="" selected="selected">-</option>
								<?php
								foreach($ms_mapel as $m){
								echo "<option value='".$m->id_mapel."'>".$m->id_mapel." - ".$m->nama_mapel."</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Tanggal</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" name="tgl_belajar" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Jam Belajar</label>
						<div class="col-sm-8">
							<input type="time" class="form-control" name="jam_mulai" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Ketertarikan</label>
						<div class="col-sm-8">
						<select name="ketertarikan" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_nilai as $n){
								echo "<option value='".$n->id_nilai."'>".$n->id_nilai." - ".$n->nama_nilai."</option>";
							}
							?>
						</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Keaktifan</label>
						<div class="col-sm-8">
						<select name="keaktifan" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_nilai as $n){
								echo "<option value='".$n->id_nilai."'>".$n->id_nilai." - ".$n->nama_nilai."</option>";
							}
							?>
						</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Kedisiplinan</label>
						<div class="col-sm-8">
							<select name="kedisiplinan" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_nilai as $n){
								echo "<option value='".$n->id_nilai."'>".$n->id_nilai." - ".$n->nama_nilai."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Ketekunan</label>
						<div class="col-sm-8">
							<select name="ketekunan" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_nilai as $n){
								echo "<option value='".$n->id_nilai."'>".$n->id_nilai." - ".$n->nama_nilai."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Konsentrasi</label>
						<div class="col-sm-8">
							<select name="konsentrasi" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_nilai as $n){
								echo "<option value='".$n->id_nilai."'>".$n->id_nilai." - ".$n->nama_nilai."</option>";
							}
							?>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="panel">
				<div class="panel-body">
					
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Antusiasme</label>
						<div class="col-sm-8">
							<select name="antusiasme" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_nilai as $n){
								echo "<option value='".$n->id_nilai."'>".$n->id_nilai." - ".$n->nama_nilai."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Kesopanan</label>
						<div class="col-sm-8">
							<select name="kesopanan" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_nilai as $n){
								echo "<option value='".$n->id_nilai."'>".$n->id_nilai." - ".$n->nama_nilai."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Motivasi</label>
						<div class="col-sm-8">
							<select name="motivasi" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_nilai as $n){
								echo "<option value='".$n->id_nilai."'>".$n->id_nilai." - ".$n->nama_nilai."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Kemandirian</label>
						<div class="col-sm-8">
							<select name="kemandirian" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_nilai as $n){
								echo "<option value='".$n->id_nilai."'>".$n->id_nilai." - ".$n->nama_nilai."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Happiness</label>
						<div class="col-sm-8">
							<select name="happiness" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_nilai as $n){
								echo "<option value='".$n->id_nilai."'>".$n->id_nilai." - ".$n->nama_nilai."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Standar Kompetensi</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="standar_kompetensi" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Pencapaian Siswa</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="pencapaian_siswa" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Saran Guru</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="saran_guru" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Nilai Tes Formatif</label>
						<div class="col-sm-8">
							<select name="nilai_tesformatif" class="form-control">
							<option value="" selected="selected">-</option>
							<?php
							foreach($ms_nilai as $n){
								echo "<option value='".$n->id_nilai."'>".$n->id_nilai." - ".$n->nama_nilai."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Keterangan Tes Formatif</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="keterangan_tesformatif" required>
						</div>
					</div>
					<input type="submit" class="btn btn-primary" value="simpan">
					<input type="reset" class="btn btn-warning" value="cancel">
				</div>
			</div>
		</div>
	</form>
</div>




