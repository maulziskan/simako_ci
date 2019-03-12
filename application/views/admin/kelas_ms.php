<?php
include 'header.php';
?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Master Kelas</h4>
		</div>
		<div class="panel-body">
			<a href="<?php echo base_url("Admin/"); ?>kelas_input" class="btn btn-sm btn-info pull right">Tambah</a>
			<br/>
			<br/>
			<table class="table table-bordered table-striped table-hover">
				<tr>
					<th width="1%">No.</th>
					<th>Kelas</th>
					<th>Nama Kelas</th>
					<th>Jenjang</th>
				</tr>

				<?php
				

				
				$no=1;

				foreach ($data_kelas->result() as $key => $value) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $value->id_kelas; ?></td>
						<td><?php echo $value->nama_kelas; ?></td>
						<td><?php echo $value->jenjang; ?></td>
					</tr>
					<?php
					}
					?>	
			</table>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>
