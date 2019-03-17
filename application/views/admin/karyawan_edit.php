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
				<h4>Edit Master Karyawan</h4>
			</div>
		<div class="panel-body">
		<?php
		foreach($ms_karyawan as $k){
		    	?>
		    	<form method="post" action="<?php echo base_url("Admin/karyawan_update");?>" enctype='multipart/form-data'>
		    		<div class="form-group">
		    			<label>Kode Karyawan</label>
		    			<input type="text" name="id_karyawan" class="form-control" value="<?php echo $k->id_karyawan; ?>" readonly>
		    		</div>
		    		<div class="form-group">
		    			<label>Nama Karyawan</label>
		    			<input type="text" class="form-control" name="nama_karyawan" value="<?php echo $k->nama_karyawan; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Alamat Karyawan</label>
		    			<input type="text" class="form-control" name="alamat_karyawan" value="<?php echo $k->alamat_karyawan; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>No. Telepon Rumah</label>
		    			<input type="text" name='no_telp' class="form-control" value="<?php echo $k->no_telp; ?>">
		    		</div>
		    		<div class="form-group">
		    			<label>No. Handphone</label>
		    			<input type="text" name='no_hp' class="form-control" value="<?php echo $k->no_hp; ?>">
		    		</div>
		    		<div class="form-group">
		    			<label>Alamat Email</label>
		    			<input type="email" class="form-control" name="email_karyawan" value="<?php echo $k->email_karyawan; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Status kerja</label>
		    			<input type="text" class="form-control" name="status_kerja" value="<?php echo $k->status_kerja; ?> ">
		    		</div>
				<div class="form-group">
		    			<label>Jabatan</label>
		    			<input type="text" class="form-control" name="jabatan" value="<?php echo $k->jabatan; ?> ">
		    		</div>
				<div class="form-group">
		    			<label>Foto Karyawan</label>
		    			<input type="file" class="form-control" name="foto_karyawan" value="<?php echo $k->foto_karyawan; ?> ">
		    		</div>
				<div class="form-group">
		    			<label>Agama</label>
		    			<input type="text" class="form-control" name="agama" value="<?php echo $k->agama; ?> ">
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

