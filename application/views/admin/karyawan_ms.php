<?php
include 'header.php';
?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Master Karyawan</h4>
		</div>
		<div class="panel-body">
			<a href="karyawan_input.php" class="btn btn-sm btn-info pull-right">Tambah</a>
			<br/>
			<br/>
			<table class="table table-bordered table-stripped table-hover">
				<tr>
					<th width="1%">No.</th>
					<th>Kode Karyawan</th>
					<th>Nama Karyawan</th>
					<th>Alamat</th>
					<th>No.Handphone</th>
					<th width="10%"><center>Opsi</center></th>
				</tr>

				<?php
				include '../koneksi.php';

				$data=mysqli_query($koneksi,"select * from ms_karyawan");

				$no=1;

				while ($d=mysqli_fetch_array($data)) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['id_karyawan']; ?></td>
						<td><?php echo $d['nama_karyawan']; ?></td>
						<td><?php echo $d['alamat_karyawan']; ?></td>
						<td><?php echo $d['no_hp']; ?></td>
						<td><a href="karyawan_edit.php?id=<?php echo $d['id_karyawan']; ?>" class="btn btn-sm btn-info" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
							<a href="karyawan_hapus.php?id=<?php echo $d['id_karyawan']; ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus"><span class="glyphicon glyphicon-trash"></span></a>
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