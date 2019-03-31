<?php
include 'header.php';
?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Master Mata Pelajaran</h4>
		</div>
		<div class="panel-body">
			<a href="<?php echo base_url("Admin/"); ?>mapel_input" class="btn btn-sm btn-info pull-right">Tambah</a>
			<br/>
			<br/>
			<table class="table table-bordered table-stripped table-hover">
				<tr>
					<th width="1%">No.</th>
					<th>Kode Mata Pelajaran</th>
					<th>Nama Mata Pelajaran</th>
					<th>Jenjang Pendidikan</th>
					<th width="10%"><center>Opsi</center></th>
				</tr>

				<?php
			
				$no=1;

				foreach ($data_mapel->result() as $key => $value) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $value->id_mapel; ?></td>
						<td><?php echo $value->nama_mapel; ?></td>
						<td><?php echo $value->jenjang; ?></td>
						<td>
							<a class="btn btn-sm btn-info" data-toggle="tooltip" title="Edit" value="<?php echo $value->id_mapel; ?>" href="<?= base_url('Admin/mapel_edit/'.$value->id_mapel); ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" value="<?php echo $value->id_mapel; ?>" href="<?= base_url('Admin/mapel_hapus/'.$value->id_mapel); ?>"><span class="glyphicon glyphicon-trash"></span></a>
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