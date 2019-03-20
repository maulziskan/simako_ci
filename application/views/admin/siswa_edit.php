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
		
	<form class="form-horizontal" method="post" action="<?php echo base_url("Admin/siswa_update");?>" enctype="multipart/form-data">
		<div class="col-sm-6">
			<div class="panel">
				<div class="panel-body">
					<?php
					foreach($ms_siswa as $s){
						?>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">No. Induk Siswa</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" maxlength="12" name="id_siswa" value="<?php echo $s->id_siswa;?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Nama Lengkap Siswa</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="nama_siswa" value="<?php echo $s->nama_siswa;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">ID Orang Tua/Wali</label>
						<div class="col-sm-8">
							<select name="id_walimurid" class="form-control">
							<option value="<?php echo $s->id_walimurid;?>" selected="selected"><?php echo $s->id_walimurid;?></option>
								<?php
								foreach($ms_walimurid as $w){
								echo "<option value='".$w->id_walimurid."'>".$w->id_walimurid." - ".$w->nama_walimurid."</option>";
								}
								?>
							
						</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">ID Sekolah</label>
						<div class="col-sm-8">
							<select name="id_sekolah" class="form-control">
							<option value="<?php echo $s->id_sekolah;?>" selected="selected"><?php echo $s->id_sekolah;?></option>
								<?php
								foreach($ms_sekolah as $b){
								echo "<option value='".$b->id_sekolah."'>".$b->id_sekolah." - ".$b->nama_sekolah."</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">ID Kelas</label>
						<div class="col-sm-8">
							<select name="id_kelas" class="form-control">
							<option value="<?php echo $s->id_kelas;?>" selected="selected"><?php echo $s->id_kelas;?></option>
								<?php
								foreach($ms_kelas as $k){
								echo "<option value='".$k->id_kelas."'>".$k->id_kelas." - ".$k->nama_kelas."</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Jenis Kelamin</label>
						<div class="col-sm-8">
							<select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
								<?php
								$jk=$s->jenis_kelamin;
								?>

								<option <?php if($jk=="Laki-laki") echo 'selected';?> value="Laki-laki">Laki-laki</option>
  								<option <?php if($jk=="Perempuan") echo 'selected';?> value="Perempuan">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Tempat Lahir</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $s->tempat_lahir;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Tanggal Lahir</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" name="tgl_lahir" value="<?php echo $s->tgl_lahir;?>">
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
							<input type="text" class="form-control" name="nisn" value="<?php echo $s->nisn;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">NIK</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" maxlength="16" name="nik" value="<?php echo $s->nik;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Agama</label>
						<div class="col-sm-8">
							<select name="agama" class="form-control">
							<?php
							$agama=$s->agama;
							?>
								<option <?php if($agama=="Islam") echo 'selected';?> value="Islam">Islam</option>
  								<option <?php if($agama=="Katolik") echo 'selected';?> value="Katolik">Katolik</option>
  								<option <?php if($agama=="Protestan") echo 'selected';?> value="Protestan">Protestan</option>
  								<option <?php if($agama=="Hindu") echo 'selected';?> value="Hindu">Hindu</option>
  								<option <?php if($agama=="Budha") echo 'selected';?> value="Budha">Budha</option>
  								<option <?php if($agama=="Kong Hu chu") echo 'selected';?> value="Kong Hu chu">Kong Hu Chu</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Asal Sekolah</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="asal_sekolah" value="<?php echo $s->asal_sekolah;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Tanggal Registrasi</label>
						<div class="col-sm-8">
							<input type="date" class="form-control" name="tgl_daftar" value="<?php echo $s->tgl_daftar;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Daftar di Kelas</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="kelas_daftar" value="<?php echo $s->kelas_daftar;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" style="text-align: left;">Upload Foto Siswa</label>
						<div class="col-sm-8">
							<input type="file" class="form-control" name="foto_siswa" value="<?php echo $s->foto_siswa;?>">
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

<?php
include 'footer.php';
?>




