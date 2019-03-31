<?php
include 'header.php';
?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Master Nilai</h4>
		</div>
		<div class="panel-body">
			<a href="<?php echo base_url("Admin/"); ?>nilai_input" class="btn btn-sm btn-info pull right">Tambah</a>
			<br/>
			<br/>
			<table class="table table-bordered table-striped table-hover">
				<tr>
					<th width="1%">No.</th>
					<th>Nilai</th>
					<th>Nama Nilai</th>
					<th>Opsi<//th>
				</tr>

				<?php
				

				
				$no=1;
				
				foreach ($data_nilai->result() as $key => $value) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $value->id_nilai; ?></td>
						<td><?php echo $value->nama_nilai; ?></td>
						<td>
							<a class="btn btn-sm btn-info" data-toggle="tooltip" title="Edit" value="<?php echo $value->id_nilai; ?>" href="<?= base_url('Admin/nilai_edit/'.$value->id_nilai); ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" value="<?php echo $value->id_nilai; ?>" href="<?= base_url('Admin/nilai_hapus/'.$value->id_nilai); ?>"><span class="glyphicon glyphicon-trash"></span></a>
					</td>

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
