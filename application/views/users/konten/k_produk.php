<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Layanan Servis</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Home</a></li>
						<li class="breadcrumb-item active">Produk</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<?php foreach($dataProduk->result_array() as $rowProduk): ?>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="card">
							<img class="card-img-top" src="<?= base_url('gambar/'.cetak($rowProduk['gambar'])); ?>" style="height: 400px" alt="Card image cap">
							<div class="card-body">
								<h4 class="card-title"><?= cetak($rowProduk['nama_jenis']); ?></h4><br>
								<div class="row">
									<div class="col">
										<a href="<?= base_url('user/produk/pesan/'.encrypt_url(cetak($rowProduk['id_produkjenis']))); ?>" class="btn btn-success btn-block">Pesan</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<!--Tampilkan pagination-->
				<?php echo $pagination; ?>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
