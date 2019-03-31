<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="author" content="maulziskan">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Sistem Manajemen Sekolah Pride HS</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>images/logo.png">
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</head>
<body style="background: #b0b3b7">
<div class="container-fluid">
	<div class="panel">
	<div class="panel-heading">
		<h4>Data Kegiatan Belajar Mengajar</h4>
	</div>

	<div class="panel-body">
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
				<th>Pencapaian Siswa</th>
				
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
					<td><?php echo $value->pencapaian_siswa; ?></td>
					
				</tr>
				<?php
			}


				?>
			</table>
		</div>
	</div>
	<script type="text/javascript">
			window.print();
		</script>

</body>
</html>
	
				