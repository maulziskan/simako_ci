<?php
include 'header.php';
?>

<div class="container">
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit Data Master User</h4>
			</div>
			<div class="panel-body">

			<?php foreach($ms_userheader as $k){ ?>
				<form method="post" action="<?php echo base_url("Admin/user_update"); ?>">
					<div class="form-group">
						<label>User ID</label>
						<input type="text" class="form-control" name="kd_user" value="<?php echo $k->kd_user;?>" readonly>
					</div>
					<div class="form-group">
						<label>Nama User</label>
						<input type="text" class="form-control" name="nama_user" value="<?php echo $k->nama_user;?>">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" name="password" value="<?php echo $k->password;?>">
                    </div>
                    <div class="form-group">
						<label>Posisi</label>
						<select name="posisi" class="form-control">
							<?php
							$posisi=$k->posisi;
							?>
								<option <?php if($posisi=="admin") echo 'selected';?> value="admin">Administrator</option>
								<option <?php if($posisi=="user") echo 'selected';?> value="user">User</option>
								<option <?php if($posisi=="guru") echo 'selected';?> value="guru">Guru</option>
								<option <?php if($posisi=="walimurid") echo 'selected';?> value="walimurid">Orang Tua/Wali</option>
  								
						</select>
					</div>
					<br/>
					<input type="submit" class="btn btn-primary" value="Simpan">
					<a class="btn btn-primary btn-danger" data-toggle="tooltip" title="Jika Tidak Jadi Edit Klik Cancel" href="<?php echo base_url('Admin/user_ms/'); ?>">Cancel</a>
						
                </form>
                <?php
                    }
                    ?>

			</div>
		</div>
	</div>
</div>

<?php
include 'footer.php';
?>