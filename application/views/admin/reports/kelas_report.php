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
			<h4>Data Master Kelas</h4>
		</div>
		<div class="panel-body">
			
			<br/>
			<table class="table table-bordered table-striped table-hover">
				<tr>
					<th width="1%">No.</th>
					<th>Kelas</th>
					<th>Nama Kelas</th>
					<th>Jenjang</th>
				</tr>

				<?php
				

				
				$no=1;
				
				foreach ($data_kelas->result() as $key => $value) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $value->id_kelas; ?></td>
						<td><?php echo $value->nama_kelas; ?></td>
						<td><?php echo $value->jenjang; ?></td>
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
