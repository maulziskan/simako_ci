<?php
include 'header.php';
?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Master User</h4>
		</div>
		<div class="panel-body">
			<a href="<?php echo base_url("Admin/"); ?>user_input" class="btn btn-sm btn-info pull-right">Tambah</a>
			<br/>
			<br/>
			<table class="table table-bordered table-stripped table-hover">
				<tr>
					<th width="1%">No.</th>
					<th>Kode User</th>
					<th>Nama User</th>
					<th>Posisi</th>
					<th width="10%"><center>Opsi</center></th>
				</tr>

				<?php
			
				$no=1;

				foreach ($data_user->result() as $key => $value) {
										
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $value->kd_user; ?></td>
						<td><?php echo $value->nama_user; ?></td>
						<td><?php echo $value->posisi; ?></td>
						<td>
							<a class="btn btn-sm btn-info" data-toggle="tooltip" title="Edit" value="<?php echo $value->kd_user; ?>" href="<?= base_url('Admin/user_edit/'.$value->kd_user); ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" value="<?php echo $value->kd_user; ?>" href="<?= base_url('Admin/user_hapus/'.$value->kd_user); ?>"><span class="glyphicon glyphicon-trash"></span></a>
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