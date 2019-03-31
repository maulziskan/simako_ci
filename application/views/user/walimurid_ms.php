<?php
include 'header.php';
?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Master Wali Murid</h4>
		</div>
		<div class="panel-body">
			<a href="<?php echo base_url("Admin/walimurid_input"); ?>" class="btn btn-sm btn-info pull-right">Tambah</a>
			<br/>
			<br/>
			<table class="table table-bordered table-stripped table-hover">
				<tr>
					<th width="1%">No.</th>
					<th>Kode Wali Murid</th>
					<th>Nama Orang Tua/Wali</th>
					<th>Alamat</th>
					<th>No.Handphone</th>
					<th width="10%"><center>Opsi</center></th>
				</tr>

				<?php
				
				$no=1;

				foreach ($data_walimurid->result() as $key => $value)  {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $value->id_walimurid; ?></td>
						<td><?php echo $value->nama_walimurid; ?></td>
						<td><?php echo $value->alamat_walimurid; ?></td>
						<td><?php echo $value->no_hp; ?></td>
						<td>
							<a class="btn btn-sm btn-info" data-toggle="tooltip" title="Edit" value="<?php echo $value->id_walimurid; ?>" href="<?= base_url('Admin/walimurid_edit/'.$value->id_walimurid); ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" value="<?php echo $value->id_walimurid; ?>" href="<?= base_url('Admin/walimurid_hapus/'.$value->id_walimurid); ?>"><span class="glyphicon glyphicon-trash"></span></a>
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