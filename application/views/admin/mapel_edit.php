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
				<h4>Edit Master Mata Pelajaran</h4>
			</div>
		<div class="panel-body">
		<?php
		include '../koneksi.php';

		    $id=$_GET['id'];

		    $data=mysqli_query($koneksi,"select * from ms_mapel where id_mapel='$id'");

		    while ($d=mysqli_fetch_array($data)) {
		    	?>
		    	<form method="post" action="mapel_update.php">
		    		<div class="form-group">
		    			<label>Kode Mata Pelajaran</label>
		    			<input type="text" name="id" class="form-control" value="<?php echo $d['id_mapel']; ?>" readonly>
		    		</div>
		    		<div class="form-group">
		    			<label>Nama Mata Pelajaran</label>
		    			<input type="text" class="form-control" name="nama_mapel" value="<?php echo $d['nama_mapel']; ?> ">
		    		</div>
		    		<div class="form-group">
		    			<label>Jenjang Pendidikan</label>
		    			<input type="text" class="form-control" name="jenjang" value="<?php echo $d['jenjang']; ?> ">
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

