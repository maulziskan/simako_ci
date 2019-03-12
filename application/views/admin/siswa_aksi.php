<?php
include 'koneksi.php';

$id_siswa=$_POST['id_siswa'];
$nama_siswa=$_POST['nama_siswa'];
$id_walimurid=$_POST['id_walimurid'];
$id_sekolah=$_POST['id_sekolah'];
$id_kelas=$_POST['id_kelas'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$nisn=$_POST['nisn'];
$nik=$_POST['nik'];
$agama=$_POST['agama'];
$asal_sekolah=$_POST['asal_sekolah'];
$tgl_daftar=$_POST['tgl_daftar'];
$kelas_daftar=$_POST['kelas_daftar'];

		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg','bmp');
			$nama = $_FILES['img_siswa]['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['img_siswa]['size'];
			$file_tmp = $_FILES['img_siswa]['tmp_name'];	

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'file/'.$nama);
					$query = mysql_query("INSERT INTO upload VALUES(NULL, '$nama')");
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
		?>

		<br/>
		<br/>
		<a href="index.php">Upload Lagi</a>
		<br/>
		<br/>

		<table>
			<?php 
			$data = mysql_query("select * from upload");
			while($d = mysql_fetch_array($data)){
			?>
			<tr>
				<td>
					<img src="<?php echo "file/".$d['nama_file']; ?>">
				</td>		
			</tr>
			<?php } ?>
		</table>
	</body>
</html>


mysqli_query($koneksi,"insert into ms_barang values ('$id_siswa','$kd_kelompokbarang','$kd_supplier','$nama_siswa','$satuan','$isi','$harga_beli','$hpp','$harga_jual')");

header("location:ms_barang.php");

?>