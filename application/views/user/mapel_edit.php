<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit Data Master Mata Pelajaran</h4>
			</div>
			<div class="panel-body">

			<?php foreach($ms_mapel as $k){ ?>
				<form method="post" action="<?php echo base_url("Admin/mapel_update"); ?>">
					<div class="form-group">
						<label>Mata Pelajaran</label>
						<input type="text" class="form-control" name="id_mapel" value="<?php echo $k->id_mapel;?>" readonly>
					</div>
					<div class="form-group">
						<label>Nama Mata Pelajaran</label>
						<input type="text" class="form-control" name="nama_mapel" value="<?php echo $k->nama_mapel;?>">
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