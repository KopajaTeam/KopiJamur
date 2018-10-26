<?php $this->load->view('user/head') ?>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-danger" role="alert">
			</div>
		</div>
		<div class="col-md-12">
			<div class="alert alert-danger" role="alert">
			</div>
		</div>

		<form method="post" action=""> 
			<div class="col-md-12">
				<div class="page-header">
					<h1>Register</h1>
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama" placeholder="nama lengkap	">
					<!-- <p class="help-block">At least 4 characters, letters or numbers only</p> -->
				</div>
				<div class="form-group">
					<label for="nama">Alamat</label>
					<input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="alamat lengkap	">
					<!-- <p class="help-block">At least 4 characters, letters or numbers only</p> -->
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
					<!-- <p class="help-block">A valid email address</p> -->
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
					<!-- <p class="help-block">At least 6 characters</p> -->
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirm password</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
					<!-- <p class="help-block">Must match your password</p> -->
				</div>
				<div class="form-group">
					<label for="foto">Foto</label>
	      			<img class="card-img-top img-thumbnail mb-2" style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>master/admin/img/image_placeholder.jpg" id="foto" name="foto">
				</div>
					<div class="form-group">
						<label class="custom-file">
						  <input type="file" id="file2" name="gambar_foto" accept="image/*"  class="custom-file-input">
						</label>
					</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Register">
				</div>
			</form>
	</div>

</div><!-- .row -->
<?php $this->load->view('user/jscript') ?>