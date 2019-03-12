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
		include '../koneksi.php';

		    $id=$_GET['id'];

		    $data=mysqli_query($koneksi,"select * from ms_guru where id_guru='$id'");

		    while ($d=mysqli_fetch_array($data)) {
		    	?>
		    	<form method="post" action="guru_update.php">
		    		<div class="form-group">
		    			<label>Kode Guru</label>
		    			<input type="text" name="id" class="form-control" value="<?php echo $d['id_guru']; ?>" readonly>
		    		</div>
		    		<div class="form-group">
		    			<label>Nama Guru</label>
		    			<input type="text" class="form-control" name="nama_guru" value="<?php echo $d['nama_guru']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Alamat Guru</label>
		    			<input type="text" class="form-control" name="alamat_guru" value="<?php echo $d['alamat_guru']; ?> ">
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
		    			<input type="email" class="form-control" name="email_guru" value="<?php echo $d['email_guru']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Kode Karyawan</label>
		    			<input type="text" class="form-control" name="id_karyawan" value="<?php echo $d['id_karyawan']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Pendidikan Terakhir</label>
		    			<input type="text" class="form-control" name="jenjang_pendidikan" value="<?php echo $d['jenjang_pendidikan']; ?> ">
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

