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
		include '../koneksi.php';

		    $id=$_GET['id'];

		    $data=mysqli_query($koneksi,"select * from ms_karyawan where id_karyawan='$id'");

		    while ($d=mysqli_fetch_array($data)) {
		    	?>
		    	<form method="post" action="karyawan_update.php">
		    		<div class="form-group">
		    			<label>Kode Karyawan</label>
		    			<input type="text" name="id" class="form-control" value="<?php echo $d['id_karyawan']; ?>" readonly>
		    		</div>
		    		<div class="form-group">
		    			<label>Nama Karyawan</label>
		    			<input type="text" class="form-control" name="nama_karyawan" value="<?php echo $d['nama_karyawan']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Alamat Karyawan</label>
		    			<input type="text" class="form-control" name="alamat_karyawan" value="<?php echo $d['alamat_karyawan']; ?> ">
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
		    			<input type="email" class="form-control" name="email_karyawan" value="<?php echo $d['email_karyawan']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Status kerja</label>
		    			<input type="text" class="form-control" name="status_kerja" value="<?php echo $d['status_kerja']; ?> ">
		    		</div>
				<div class="form-group">
		    			<label>Jabatan</label>
		    			<input type="text" class="form-control" name="jabatan" value="<?php echo $d['jabatan']; ?> ">
		    		</div>
				<div class="form-group">
		    			<label>Foto Karyawan</label>
		    			<input type="text" class="form-control" name="foto_karyawan" value="<?php echo $d['foto_karyawan']; ?> ">
		    		</div>
				<div class="form-group">
		    			<label>Agama</label>
		    			<input type="text" class="form-control" name="agama" value="<?php echo $d['agama']; ?> ">
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
