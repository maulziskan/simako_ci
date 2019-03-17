<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit Data Master Kelas</h4>
			</div>
			<div class="panel-body">
			<?php foreach($ms_kelas as $k){ ?>
				<form method="post" action="<?php echo base_url("Admin/kelas_update"); ?>">
					<div class="form-group">
						<label>Kelas</label>
						<input type="text" class="form-control" name="id_kelas" value="<?php echo $k->id_kelas;?>" readonly>
					</div>
					<div class="form-group">
						<label>Nama Kelas</label>
						<input type="text" class="form-control" name="nama_kelas" value="<?php echo $k->nama_kelas;?>">
					</div>
					<div class="form-group">
						<label>Jenjang</label>
						<input type="text" class="form-control" name="jenjang" value="<?php echo $k->jenjang;?>">
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