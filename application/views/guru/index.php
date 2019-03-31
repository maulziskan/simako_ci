<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<?php 
include 'header.php';
?>

<div class="container">
	<div class="alert alert-info text-center">
		<h4 style="margin-bottom: 0px"><b>Selamat Datang di Sistem Manajemen Sekolah</b></h4>			
	</div>

	<div class="panel">
		<div class="panel-heading">
			<h4>Dashboard</h4>
		</div>
		<div class="panel-body">
			
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-user"></i> 
								<span class="pull-right">
									
									<?php 

									$siswa =$this->db->query("select * from ms_siswa")->num_rows();
									
									echo ($siswa);
									?>
								</span>
							</h1>
							Jumlah Siswa
						</div>						
					</div>				
				</div>		

				<div class="col-md-3">
					<div class="panel panel-warning">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-retweet"></i> 
								<span class="pull-right">
									
									<?php 
									$belajarharian=$this->db->query("select * from belajarharian")->num_rows();
									echo ($belajarharian);
									?>
								</span>
							</h1>
							Jumlah KBM
						</div>						
					</div>				
				</div>		

				<div class="col-md-3">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-info-sign"></i> 
								<span class="pull-right">
									
									<?php 
									$guru = $this->db->query("select * from ms_guru")->num_rows();
									echo ($guru);
									?>
								</span>
							</h1>
							Jumlah Guru
						</div>						
					</div>				
				</div>				

				<div class="col-md-3">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-ok-circle"></i> 
								<span class="pull-right">
									
									<?php 
									$walimurid = $this->db->query("select * from ms_walimurid")->num_rows();
									echo ($walimurid);
									?>
								</span>
							</h1>
							Jumlah Orang Tua/Wali
						</div>						
					</div>				
				</div>				
			</div>		

		</div>
	</div>
</div>

<?php
include 'footer.php';
?>
