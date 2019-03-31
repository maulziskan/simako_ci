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

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Master Karyawan</h4>
		</div>
		<div class="panel-body">
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
						
					</tr>
					<?php
				}
			?>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
			window.print();
		</script>

</body>
</html>