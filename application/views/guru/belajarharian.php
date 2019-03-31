<?php
include 'header.php';
?>

<div class="container-fluid">
	<div class="panel">
	<div class="panel-heading">
		<h4>Data Kegiatan Belajar Mengajar</h4>
	</div>

	<div class="panel-body">
		<a href="<?php echo base_url("Admin/belajarharian_input"); ?>" class="btn btn-sm btn-info pull-right">Tambah</a>
		<br/>
		<br/>
		<table class="table table-bordered table-striped">
			<tr>
				<th width="1%">No.</th>
				<th>No. Belajar Harian</th>
                <th>ID Guru</th>
				<th>No. Induk Siswa</th>
				<th>Kelas</th>
				<th>Kode Mata Pelajaran</th>
				<th>Tanggal KBM</th>
				<th>Jam KBM</th>
				<th width="12%"><center>Opsi</center></th>
			</tr>

			<?php
			$no=1;
			foreach ($data_belajarharian->result() as $key => $value) {

				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $value->id_belajarharian; ?></td>
					<td><?php echo $value->id_guru; ?></td>
					<td><?php echo $value->id_siswa; ?></td>
					<td><?php echo $value->id_kelas; ?></td>
					<td><?php echo $value->id_mapel; ?></td>
					<td><?php echo $value->tgl_belajar; ?></td>
					<td><?php echo $value->jam_mulai; ?></td>
					<td>
							<a class="btn btn-sm btn-info" data-toggle="tooltip" title="Edit" value="<?php echo $value->id_belajarharian; ?>" href="<?= base_url('Admin/belajarharian_edit/'.$value->id_belajarharian); ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete" value="<?php echo $value->id_belajarharian; ?>" href="<?= base_url('Admin/belajarharian_hapus/'.$value->id_belajarharian); ?>"><span class="glyphicon glyphicon-trash"></span></a>
							<a class="btn btn-sm btn-success" data-toggle="tooltip" title="Print" value="<?php echo $value->id_belajarharian; ?>" href="<?= base_url('Admin/belajarharian_reportid/'.$value->id_belajarharian); ?>"><span class="glyphicon glyphicon-print"></span></a>
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

	
				