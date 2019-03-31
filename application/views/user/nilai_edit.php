<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit Data Master Nilai</h4>
			</div>
			<div class="panel-body">
			<?php foreach($ms_nilai as $k){ ?>
				<form method="post" action="<?php echo base_url("Admin/nilai_update"); ?>">
					<div class="form-group">
						<label>Nilai</label>
						<input type="text" class="form-control" name="id_nilai" value="<?php echo $k->id_nilai;?>" readonly>
					</div>
					<div class="form-group">
						<label>Nama Nilai</label>
						<input type="text" class="form-control" name="nama_nilai" value="<?php echo $k->nama_nilai;?>">
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