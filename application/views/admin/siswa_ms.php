<?php
include 'header.php';
?>

<div class="container-fluid">
	<div class="panel">
	<div class="panel-heading">
		<h4>Data Master Siswa</h4>
	</div>

	<div class="panel-body">
		<a href="<?php echo base_url("Admin/"); ?>siswa_input" class="btn btn-sm btn-info pull-right">Tambah</a>
		<br/>
		<br/>
		<table class="table table-bordered table-striped">
			<tr>
				<th width="1%">No.</th>
				<th>No. Induk Siswa</th>
				<th>Nama Lengkap Siswa</th>
				<th>ID Orang Tua/Wali</th>
				<th>Kode Kelas Siswa</th>
				<th>Foto Siswa</th>
				<th width="12%"><center>Opsi</center></th>
			</tr>

			<?php
			$no=1;
			foreach ($data_siswa->result() as $key => $value) {

				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $value->id_siswa; ?></td>
					<td><?php echo $value->nama_siswa; ?></td>
					<td><?php echo $value->id_walimurid; ?></td>
					<td><?php echo $value->id_kelas; ?></td>
					<td><?php echo "<img src='".base_url("./upload/siswa/".$value->foto_siswa)."' width='100' height='100'>";?></td>
					<td>
							<a class="btn btn-sm btn-info" data-toggle="tooltip" title="Edit" value="<?php echo $value->id_siswa; ?>" href="<?= base_url('Admin/siswa_edit/'.$value->id_siswa); ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" value="<?php echo $value->id_siswa; ?>" href="<?= base_url('Admin/siswa_hapus/'.$value->id_siswa); ?>"><span class="glyphicon glyphicon-trash"></span></a>
					</td>	
				</tr>
				<?php
			}


				?>
			</table>
		</div>
	</div>

	<?php
	include 'footer.php';
	?>

	
				