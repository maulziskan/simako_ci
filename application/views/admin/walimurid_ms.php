<?php
include 'header.php';
?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Master Wali Murid</h4>
		</div>
		<div class="panel-body">
			<a href="walimurid_input.php" class="btn btn-sm btn-info pull-right">Tambah</a>
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
				include '../koneksi.php';

				$data=mysqli_query($koneksi,"select * from ms_walimurid");

				$no=1;

				while ($d=mysqli_fetch_array($data)) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['id_walimurid']; ?></td>
						<td><?php echo $d['nama_walimurid']; ?></td>
						<td><?php echo $d['alamat_walimurid']; ?></td>
						<td><?php echo $d['no_hp']; ?></td>
						<td><a href="walimurid_edit.php?id=<?php echo $d['id_walimurid']; ?>" class="btn btn-sm btn-info" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
							<a href="walimurid_hapus.php?id=<?php echo $d['id_walimurid']; ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
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