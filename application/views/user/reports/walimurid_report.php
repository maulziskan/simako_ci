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
			<h4>Data Master Wali Murid</h4>
		</div>
		<div class="panel-body">
			<br/>
			<br/>
			<table class="table table-bordered table-stripped table-hover">
				<tr>
					<th width="1%">No.</th>
					<th>Kode Wali Murid</th>
					<th>Nama Orang Tua/Wali</th>
					<th>Alamat</th>
					<th>Hubungan Kerabat</th>
					<th>No. Telepon</th>
					<th>No.Handphone</th>
					<th>Alamat Email</th>
					<th>Pekerjaan</th>					
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
						<td><?php echo $value->hubungan_kerabat; ?></td>
						<td><?php echo $value->no_telp; ?></td>
						<td><?php echo $value->no_hp; ?></td>
						<td><?php echo $value->email_walimurid; ?></td>
						<td><?php echo $value->pekerjaan; ?></td>
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
