<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	
		<div class="col-sm-12">
			<div class="panel">
				<div class="panel-heading">
					<h4><center>Edit Kegiatan Belajar Mengajar</center></h4>
				</div>
			</div>
		</div>
<?php foreach($belajarharian as $b){ ?>
	<form class="form-horizontal" method="post" action="<?php echo base_url("Admin/belajarharian_update");?>" enctype="multipart/form-data">
		<div class="col-sm-6">
			<div class="panel">
				<div class="panel-body">
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">No. belajarharian</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" maxlength="14" name="id_belajarharian" value="<?php echo $b->id_belajarharian;?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Kode Guru</label>
						<div class="col-sm-8">
						<select name="id_guru" class="form-control">
						<?php
							$id_guru=$b->id_guru;
							?>
							
							
							<?php
							foreach($ms_guru as $g){
								$selected='';
								if($b->id_guru==$g->id_guru){ 
									$selected = "selected";
								}
								echo "<option {$selected} value='".$g->id_guru."'>".$g->id_guru." - ".$g->nama_guru."</option>";
							}
							?>
						</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Kelas</label>
						<div class="col-sm-8">
							<select name="id_kelas" class="form-control">
							<?php
							$id_kelas=$b->id_kelas;
							?>
							
							
							<?php
							foreach($ms_kelas as $k){
								$selected='';
								if($b->id_kelas==$k->id_kelas){ 
									$selected = "selected";
								}
								echo "<option {$selected} value='".$k->id_kelas."'>".$k->id_kelas." - ".$k->nama_kelas."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">No. Induk Siswa</label>
						<div class="col-sm-8">
							<select name="id_siswa" class="form-control">
							<?php
							$id_siswa=$b->id_siswa;
							?>
							
							
							<?php
							foreach($ms_siswa as $s){
								$selected='';
								if($b->id_siswa==$s->id_siswa){ 
									$selected = "selected";
								}
								echo "<option {$selected} value='".$s->id_siswa."'>".$s->id_siswa." - ".$s->nama_siswa."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Kode Mata Pelajaran</label>
						<div class="col-sm-8">
							<select name="id_mapel" class="form-control">
							<?php
							$id_mapel=$b->id_mapel;
							?>
							
							
							<?php
							foreach($ms_mapel as $m){
								$selected='';
								if($b->id_mapel==$m->id_mapel){ 
									$selected = "selected";
								}
								echo "<option {$selected} value='".$m->id_mapel."'>".$m->id_mapel." - ".$m->nama_mapel."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Tanggal</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" name="tgl_belajar" value="<?php echo $b->tgl_belajar;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Jam Belajar</label>
						<div class="col-sm-8">
							<input type="time" class="form-control" name="jam_mulai" value="<?php echo $b->jam_mulai;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Ketertarikan</label>
						<div class="col-sm-8">
							<input type="input" class="form-control" name="ketertarikan" value="<?php echo $b->ketertarikan;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Keaktifan</label>
						<div class="col-sm-8">
							<input type="input" class="form-control" name="keaktifan" value="<?php echo $b->keaktifan;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Kedisiplinan</label>
						<div class="col-sm-8">
							<input type="input" class="form-control" name="kedisiplinan" value="<?php echo $b->kedisiplinan ;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Ketekunan</label>
						<div class="col-sm-8">
							<input type="input" class="form-control" name="ketekunan" value="<?php echo $b->ketekunan;?>">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="panel">
				<div class="panel-body">
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Konsentrasi</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="konsentrasi" value="<?php echo $b->konsentrasi;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Antusiasme</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="antusiasme" value="<?php echo $b->antusiasme;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Kesopanan</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="kesopanan" value="<?php echo $b->kesopanan;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Motivasi</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="motivasi" value="<?php echo $b->motivasi;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Kemandirian</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="kemandirian" value="<?php echo $b->kemandirian;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Happiness</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="happiness" value="<?php echo $b->happiness;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Standar Kompetensi</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="standar_kompetensi" value="<?php echo $b->standar_kompetensi;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Pencapaian Siswa</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="pencapaian_siswa" value="<?php echo $b->pencapaian_siswa;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Saran Guru</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="saran_guru" value="<?php echo $b->saran_guru;?>">
						</div>
					</div>
					<input type="submit" class="btn btn-primary" value="simpan">
					<input type="reset" class="btn btn-warning" value="cancel">
				</div>
			</div>
		</div>
	</form>
	<?php
		}
	?>
</div>




