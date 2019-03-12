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
		include '../koneksi.php';

		    $id=$_GET['id'];

		    $data=mysqli_query($koneksi,"select * from ms_walimurid where id_walimurid='$id'");

		    while ($d=mysqli_fetch_array($data)) {
		    	?>
		    	<form method="post" action="walimurid_update.php">
		    		<div class="form-group">
		    			<label>Kode Wali Murid</label>
		    			<input type="text" name="id" class="form-control" value="<?php echo $d['id_walimurid']; ?>" readonly>
		    		</div>
		    		<div class="form-group">
		    			<label>Nama wali Murid</label>
		    			<input type="text" class="form-control" name="nama_walimurid" value="<?php echo $d['nama_walimurid']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Alamat wali Murid</label>
		    			<input type="text" class="form-control" name="alamat_walimurid" value="<?php echo $d['alamat_walimurid']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Hubungan Kerabat dengan Siswa</label>
		    			<input type="text" class="form-control" name="hubungan_kerabat" value="<?php echo $d['hubungan_kerabat']; ?> ">
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
		    			<input type="email" class="form-control" name="email_walimurid" value="<?php echo $d['email_walimurid']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Pekerjaan</label>
		    			<input type="text" class="form-control" name="pekerjaan" value="<?php echo $d['pekerjaan']; ?> ">
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

