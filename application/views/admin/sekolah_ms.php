<?php
include 'header.php';
?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Master Sekolah</h4>
		</div>
		<div class="panel-body">
			<a href="<?php echo base_url("Admin/sekolah_input");?>" class="btn btn-sm btn-info pull-right">Tambah</a>
			<br/>
			<br/>
			<table class="table table-bordered table-stripped table-hover">
				<tr>
					<th width="1%">No.</th>
					<th>Kode Sekolah</th>
					<th>Nama Sekolah</th>
					<th>Alamat</th>
					<th>No.Telepon</th>
					<th width="10%"><center>Opsi</center></th>
				</tr>

				<?php
				
				$no=1;

				foreach ($data_sekolah->result() as $key => $d) {
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d->id_sekolah; ?></td>
						<td><?php echo $d->nama_sekolah; ?></td>
						<td><?php echo $d->alamat_sekolah; ?></td>
						<td><?php echo $d->no_telp; ?></td>
						<td>
							<a class="btn btn-sm btn-info" data-toggle="tooltip" title="Edit" value="<?php echo $d->id_sekolah; ?>" href="<?= base_url('Admin/sekolah_edit/'.$d->id_sekolah); ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" value="<?php echo $d->id_sekolah; ?>" href="<?= base_url('Admin/sekolah_hapus/'.$d->id_sekolah); ?>"><span class="glyphicon glyphicon-trash"></span></a>
					
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