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
				<h4>Edit Master Wali Murid</h4>
			</div>
		<div class="panel-body">
		<?php
		foreach($ms_walimurid as $k){ 
			?>
		    	<form method="post" action="<?php echo base_url("Admin/walimurid_update"); ?>">
		    		<div class="form-group">
		    			<label>Kode Wali Murid</label>
		    			<input type="text" name="id_walimurid" class="form-control" value="<?php echo $k->id_walimurid; ?>" readonly>
		    		</div>
		    		<div class="form-group">
		    			<label>Nama wali Murid</label>
		    			<input type="text" class="form-control" name="nama_walimurid" value="<?php echo $k->nama_walimurid; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Alamat wali Murid</label>
		    			<input type="text" class="form-control" name="alamat_walimurid" value="<?php echo $k->alamat_walimurid; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Hubungan Kerabat dengan Siswa</label>
		    			<input type="text" class="form-control" name="hubungan_kerabat" value="<?php echo $k->hubungan_kerabat; ?> ">
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
		    			<input type="email" class="form-control" name="email_walimurid" value="<?php echo $k->email_walimurid; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Pekerjaan</label>
		    			<input type="text" class="form-control" name="pekerjaan" value="<?php echo $k->pekerjaan; ?> ">
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

