<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<div class="login-box ">
	<!-- /.login-logo -->
	<div class="card">
		<div class="boximage">
			<img class="card-img-top" src="<?= base_url('gambar/box_lg.png'); ?>" alt="login image">
			<div class="bottom-left1">WELCOME</div>
			<div class="bottom-left2">TO OUR MEMBER</div>
		</div>
		<div class="card-body login-card-body">
			<h3 class="login-box-msg mylogin">LOGIN MEMBER</h3>
			<p class="login-box-msg">
				<?php
				echo $this->session->flashdata('pesan');
				echo $this->session->flashdata('pesan2');
				echo $this->session->flashdata('pesan3');
				?>
			</p>

			<form action="<?= base_url('Auth'); ?>" method="post">
				<div class="input-group mb-3">
					<input type="text" name="username" maxlength="30" class="form-control" placeholder="Email" required="required">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" name="password" maxlength="16" class="form-control" placeholder="Password" required="required">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="icheck-primary">
							<?= $image; ?>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-md-6">
						<input name="captcha" class="form-control" placeholder="Captcha"/>
					</div>
					<!-- /.col -->
				</div>
				<div class="row">
					<div class="col-md-12">
							<small><a href="#" class="float-right">Lupa password ?</a></small>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-md-12">
						<button type="submit" class="btn btn-primary btn-block bg-dark">Login</button>
					</div>
				</div>
			</form>

			<!-- /.social-auth-links -->
			<div class="row mt-3">

				<div class="col-md-12 text-center">
					Bukan member ? <a href="#" >Daftar</a>
				</div>
			</div>
		</div>
		<!-- /.login-card-body -->
	</div>
</div>
<!-- /.login-box -->
