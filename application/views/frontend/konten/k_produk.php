<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div role="main" class="main">
	<section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-image: url(img/landing/header_bg.jpg); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
		<div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
		<div class="container pt-5 mt-5">
			<div class="row align-items-center pt-3">
				<div class="col-lg-5 mt-5">
					<h1 class="text-primary font-weight-bold mb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750">Layanan Produk</h1>
				</div>
			</div>
		</div>
	</section>


	<section class="section section-no-border pb-0 m-5 mb-2">
		<div class="container py-2">
			<div class="row align-items-center justify-content-between">
				<?php foreach($dataProduk->result_array() as $rowProduk): ?>
				<div class="col-md-4 col-sm-3 col-xs-12 mb-5">
					<div class="card">
						<img src="<?= base_url('gambar/'.cetak($rowProduk['gambar'])); ?>" height="200px" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"><?= cetak($rowProduk['nama_jenis']); ?></h5>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="row">
				<div class="col">
					<!--Tampilkan pagination-->
					<?php echo $pagination; ?>
				</div>
			</div>
		</div>
	</section>


</div>
<footer id="footer" class="bg-color-dark-scale-2 border border-right-0 border-left-0 border-bottom-0 border-color-light-3 mt-0">
	<div class="copyright bg-dark py-4">
		<div class="container text-center py-2">
			<p class="mb-0 text-2">Copyright 2021 <?= cetak($title); ?> All Rights Reserved </p>
		</div>
	</div>
</footer>

