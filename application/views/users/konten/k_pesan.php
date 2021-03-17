<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Pesan Layanan Servis</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('user/produk'); ?>">Produk</a></li>
						<li class="breadcrumb-item active">Pesan</li>
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
			<form action="<?= base_url('user/produk/pesan/'.cetak(encrypt_url($idProduk))); ?>" method="post">
				<div class="row">
					<!--	Form Ruas Kiri		-->
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<!-- Judul -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<h3>Jenis Produk: <span class="text-primary"><?= cetak($namaProduk); ?></span> </h3>
										</div>
									</div>
								</div>
								<!-- Nama Produk -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="namaProduk">Nama Produk <span class="text-danger">*</span></label>
											<input type="text" name="namaProduk" id="namaProduk" maxlength="128" class="form-control" value="<?= set_value('namaProduk'); ?>" placeholder="<?= cetak($namaProduk); ?> Seri 01" required="required">
										</div>
									</div>
								</div>
								<!-- Nama Produk -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="merek">Merek Produk <span class="text-danger">*</span></label>
											<input type="text" name="merek" id="merek" maxlength="128" class="form-control" value="<?= set_value('merek'); ?>" placeholder="Merek" required="required">
										</div>
									</div>
								</div>
								<!-- Keluhan -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="keluhan">Keluhan <span class="text-danger">*</span></label>
											<input type="text" name="keluhan" id="keluhan" maxlength="300" class="form-control" value="<?= set_value('keluhan'); ?>" placeholder="Keluhan kerusakan" required="required">
										</div>
									</div>
								</div>
								<!-- Penyebab -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="penyebab">Penyebab Kerusakan <span class="text-danger">*</span></label>
											<input type="text" name="penyebab" id="penyebab" maxlength="300" class="form-control" value="<?= set_value('penyebab'); ?>" placeholder="Perkiraan penyebab kerusakan / terakhir penggunaan" required="required">
										</div>
									</div>
								</div>
								<!-- Penyebab -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="delivery">Pengambilan / Pengiriman Barang <span class="text-danger">*</span></label>
											<select class="form-control" name="delivery" id="delivery" required="required">
												<option value="">Pilih Layanan</option>
												<option value="dijemput">Dijemput</option>
												<option value="diantar">Diantarkan</option>
											</select>
											<span class="text-danger text-sm">* Jika memilih dijemput maka akan dijemput oleh kurir kami, jika memilih diantarkan maka akan diantarkan ke toko kami.</span>
										</div>
									</div>
								</div>
								<!-- Submit -->
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Simpan</button>
											<a href="<?= base_url('user/produk'); ?>"><button type="button" class="btn btn-danger">Batal</button></a>
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
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
