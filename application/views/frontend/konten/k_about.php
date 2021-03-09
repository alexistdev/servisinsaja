<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div role="main" class="main">
	<section class="section section-concept section-no-border section-dark section-angled section-angled-reverse pt-5 m-0" id="section-concept" style="background-image: url(img/landing/header_bg.jpg); background-size: cover; background-position: center; animation-duration: 750ms; animation-delay: 300ms; animation-fill-mode: forwards;">
		<div class="section-angled-layer-bottom bg-light" style="padding: 8rem 0;"></div>
		<div class="container pt-5 mt-5">
			<div class="row align-items-center pt-3">
				<div class="col-lg-5 mt-5">
					<h1 class="text-primary font-weight-bold mb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750">Tentang Kami</h1>
				</div>
			</div>
		</div>
	</section>


	<div class="container">

		<div class="row pt-5">
			<div class="col">

				<div class="row text-center pb-5">
					<div class="col-md-9 mx-md-auto">
						<div class="overflow-hidden mb-3">
							<h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
								<span>Servisinsaja Hadir </span>
								<span class="word-rotator-words bg-primary">
												<b class="is-visible">Membawa</b>
												<b>Memberi</b>
												<b>Mengembangkan</b>
											</span>
								<span> Solusi</span>
							</h1>
						</div>
						<div class="overflow-hidden mb-3">
							<p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu, ac tincidunt mauris lacus sed leo.
							</p>
						</div>
					</div>
				</div>

				<div class="row mt-3 mb-5">
					<div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
						<h3 class="font-weight-bold text-4 mb-2">Misi Kami</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
					</div>
					<div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
						<h3 class="font-weight-bold text-4 mb-2">Visi Kami</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla vel pellentesque consequat, ante nulla hendrerit arcu.</p>
					</div>
					<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
						<h3 class="font-weight-bold text-4 mb-2">Mengapa harus kami</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel consequat, ante nulla hendrerit arcu.</p>
					</div>
				</div>

			</div>
		</div>

	</div>

	<section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
		<div class="container">
			<div class="row counters counters-sm pb-4 pt-3">
				<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
					<div class="counter">
						<i class="icons icon-user text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="2500" data-append="+">0</strong>
						<label class="text-4 mt-1 text-color-light">User Terdaftar</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
					<div class="counter">
						<i class="icons icon-layers text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="150" data-append="+">0</strong>
						<label class="text-4 mt-1 text-color-light">Produk</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
					<div class="counter">
						<i class="icons icon-graph text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="3000" data-append="+">0</strong>
						<label class="text-4 mt-1 text-color-light">Transaksi</label>
					</div>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="counter">
						<i class="icons icon-cup text-color-light"></i>
						<strong class="text-color-light font-weight-extra-bold" data-to="350">0</strong>
						<label class="text-4 mt-1 text-color-light">Testimoni</label>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
		<div class="row pt-5 pb-4 my-5">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
					<div>
						<img class="img-fluid rounded-0 mb-4" src="<?= base_url('assets/frontend/'); ?>img/team/team-1.jpg" alt="" />
						<h3 class="font-weight-bold text-color-dark text-4 mb-0">Annisa Nur Fania</h3>
						<p class="text-2 mb-0">FOUNDER</p>
					</div>
					<div>
						<img class="img-fluid rounded-0 mb-4" src="<?= base_url('assets/frontend/'); ?>img/team/team-2.jpg" alt="" />
						<h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
						<p class="text-2 mb-0">DEVELOPER</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
				<h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Perkenalkan <strong class="font-weight-extra-bold">Team kami</strong></h2>
				<p class="lead">Kami adalah profesional di bidang layanan service selama bertahun-tahun.</p>
				<p class="mb-4">Kami adalah profesional yang siap membantu anda untuk mengatasi segala kebutuhan layanan service anda.</p>
			</div>
		</div>
	</div>


</div>
<footer id="footer" class="bg-color-dark-scale-2 border border-right-0 border-left-0 border-bottom-0 border-color-light-3 mt-0">
	<div class="copyright bg-dark py-4">
		<div class="container text-center py-2">
			<p class="mb-0 text-2">Copyright 2021 <?= cetak($title); ?> All Rights Reserved </p>
		</div>
	</div>
</footer>

