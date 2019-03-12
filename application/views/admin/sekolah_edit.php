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
				<h4>Edit Master Sekolah</h4>
			</div>
		<div class="panel-body">
		<?php
		include '../koneksi.php';

		    $id=$_GET['id'];

		    $data=mysqli_query($koneksi,"select * from ms_sekolah where id_sekolah='$id'");

		    while ($d=mysqli_fetch_array($data)) {
		    	?>
		    	<form method="post" action="sekolah_update.php">
		    		<div class="form-group">
		    			<label>Kode Sekolah</label>
		    			<input type="text" name="id" class="form-control" value="<?php echo $d['id_sekolah']; ?>" readonly>
		    		</div>
		    		<div class="form-group">
		    			<label>Nama Sekolah</label>
		    			<input type="text" class="form-control" name="nama_sekolah" value="<?php echo $d['nama_sekolah']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Alamat Sekolah</label>
		    			<input type="text" class="form-control" name="alamat_sekolah" value="<?php echo $d['alamat_sekolah']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Nama Yayasan</label>
		    			<input type="text" class="form-control" name="nama_yayasan" value="<?php echo $d['nama_yayasan']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>No. Registrasi</label>
		    			<input type="text" name='no_registrasi' class="form-control" value="<?php echo $d['no_registrasi']; ?>">
		    		</div>
		    		<div class="form-group">
		    			<label>No. Telepon Rumah</label>
		    			<input type="text" name='no_telp' class="form-control" value="<?php echo $d['no_telp']; ?>">
		    		</div>
		    		<div class="form-group">
		    			<label>No. Handphone</label>
		    			<input type="text" name='no_hp' class="form-control" value="<?php echo $d['no_hp']; ?>">
		    		</div>
		    		<div class="form-group">
		    			<label>Alamat Email</label>
		    			<input type="email" class="form-control" name="email_sekolah" value="<?php echo $d['email_sekolah']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>NPWP</label>
		    			<input type="text" class="form-control" name="npwp" value="<?php echo $d['npwp']; ?> ">
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

