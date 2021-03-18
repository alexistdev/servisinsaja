<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Setting</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Home</a></li>
						<li class="breadcrumb-item active">Setting</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<?php
					echo $this->session->flashdata('pesan1');
					echo $this->session->flashdata('pesan2'); ?>
				</div>
			</div>
			<form action="<?= base_url('user/setting'); ?>" method="post">
				<div class="row">
					<!--	Form Ruas Kiri		-->
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<!-- Email -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" name="email" id="email" maxlength="100" class="form-control" value="<?= cetak($emailAkun); ?>" placeholder="Alamat Email" readonly="readonly">
										</div>
									</div>
								</div>
								<!-- Nama Lengkap -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="namaLengkap">Nama Lengkap</label>
											<input type="text" name="namaLengkap" id="namaLengkap" maxlength="128" class="form-control" value="<?= cetak($namaAkun); ?>" placeholder="Nama Lengkap" required="required">
										</div>
									</div>
								</div>
								<!-- Nomor Telepon -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="nomorTelepon">Nomor Telepon</label>
											<input type="text" name="nomorTelepon" id="nomorTelepon" maxlength="30" class="form-control" value="<?= cetak($telpAkun); ?>" placeholder="Nomor Telepon" required="required">
										</div>
									</div>
								</div>
								<!-- Nomor Telepon -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="alamatLengkap">Alamat Lengkap</label>
											<textarea class="form-control" name="alamatLengkap" id="alamatLengkap" cols="30" rows="5"><?= cetak($alamatAkun); ?></textarea>
										</div>
									</div>
								</div>

								<!-- Password Baru -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="password">Password Baru</label>
											<input type="password" name="password" id="password" maxlength="16" class="form-control" value="<?= set_value('password'); ?>" placeholder="******" >
										</div>
									</div>
								</div>
								<!-- Submit -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Ubah</button>
											<a href="<?= base_url('user'); ?>"><button type="button" class="btn btn-danger">Batal</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</form>
		</div>
	</section>
</div>
<!-- /.content-wrapper -->
