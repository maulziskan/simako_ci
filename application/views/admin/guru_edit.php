<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit Master Guru</h4>
			</div>
		<div class="panel-body">
		<?php
		foreach ($ms_guru as $d) {
		  	?>
		    	<form method="post" action="<?php echo base_url("Admin/guru_update");?>">
		    		<div class="form-group">
		    			<label>Kode Guru</label>
		    			<input type="text" name="id_guru" class="form-control" value="<?php echo $d->id_guru; ?>" readonly>
		    		</div>
		    		<div class="form-group">
		    			<label>Nama Guru</label>
		    			<input type="text" class="form-control" name="nama_guru" value="<?php echo $d->nama_guru; ?> ">
					</div>
					<div class="form-group">
						<label>Kode Karyawan</label>
						<select id="id_karyawan" name="id_karyawan" class="form-control">
							<?php
							$id_karyawan=$d->id_karyawan;
							?>
							
							
							<?php
							foreach($ms_karyawan as $k){
								$selected='';
								if($d->id_karyawan==$k->id_karyawan){ 
									$selected = "selected";
								}
								echo "<option {$selected} value='".$k->id_karyawan."'>".$k->id_karyawan." - ".$k->nama_karyawan."</option>";
							}
							?>
						</select>
		    		</div>
		    		<div class="form-group">
		    			<label>Mata Pelajaran</label>
		    			<input type="text" class="form-control" name="mapel" value="<?php echo $d->mapel; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Kelas</label>
		    			<input type="text" name='kelas' class="form-control" value="<?php echo $d->kelas; ?>">
		    		</div>
		    		
		    		
		    		
		    		<br/>
		    		<input type="submit" class="btn btn-primary" value="Simpan">
		    	</form>
		    	<?php 
		    } 
		    ?>
		    	 
		    	</div>
		    </div>
		</div>
	</div>

	<?php
	include 'footer.php';
	?>

