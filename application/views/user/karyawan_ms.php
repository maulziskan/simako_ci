<?php
include 'header.php';
?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Master Karyawan</h4>
		</div>
		<div class="panel-body">
			<a href="<?php echo base_url("Admin/karyawan_input");?>" class="btn btn-sm btn-info pull-right">Tambah</a>
			<br/>
			<br/>
			<table class="table table-bordered table-stripped table-hover">
				<tr>
					<th width="1%">No.</th>
					<th>Kode Karyawan</th>
					<th>Nama Karyawan</th>
					<th>Alamat</th>
					<th>No.Handphone</th>
					<th>Foto Karyawan</th>
					<th width="10%"><center>Opsi</center></th>
				</tr>

				<?php
				
				$no=1;

				foreach ($data_karyawan->result() as $key => $k) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $k->id_karyawan; ?></td>
						<td><?php echo $k->nama_karyawan; ?></td>
						<td><?php echo $k->alamat_karyawan; ?></td>
						<td><?php echo $k->no_hp; ?></td>
						<td><?php echo "<img src='".base_url("./upload/karyawan/".$k->foto_karyawan)."' width='100' height='100'>";?></td>
						<td>
							<a class="btn btn-sm btn-info" data-toggle="tooltip" title="Edit" value="<?php echo $k->id_karyawan; ?>" href="<?= base_url('Admin/karyawan_edit/'.$k->id_karyawan); ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" value="<?php echo $k->id_karyawan; ?>" href="<?= base_url('Admin/karyawan_hapus/'.$k->id_karyawan); ?>"><span class="glyphicon glyphicon-trash"></span></a>
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