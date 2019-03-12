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
				<th>Jenis Kelamin</th>
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
					<td><?php echo $value->jenis_kelamin; ?></td>
					<td><?php echo $value->foto_siswa; ?></td>
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

	
				