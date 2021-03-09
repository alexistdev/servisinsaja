<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': true, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
	<div class="header-body border-top-0 bg-dark box-shadow-none">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-row">
						<div class="header-logo appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}">
							<a href="#" class="goto-top"><img alt="Porto" width="auto" height="120" data-sticky-width="82" data-sticky-height="36" data-sticky-top="0" src="<?= base_url('assets/frontend/'); ?>img/logo_white.png"></a>
						</div>
					</div>
				</div>
				<div class="header-column justify-content-end">
					<div class="header-row">
						<div class="header-nav header-nav-links header-nav-light-text header-nav-dropdowns-dark">
							<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-text-capitalize header-nav-main-text-size-2 header-nav-main-mobile-dark header-nav-main-effect-1 header-nav-main-sub-effect-1 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}">
								<nav class="collapse">
									<ul class="nav nav-pills" id="mainNav">
										<li class="dropdown">
											<a class="dropdown-item dropdown-toggle" href="<?= base_url(''); ?>">
												Home
											</a>
										</li>
										<li class="dropdown">
											<a class="dropdown-item dropdown-toggle" data-hash data-hash-offset="130" href="<?= base_url('Produk'); ?>">
												Produk
											</a>
										</li>

										<li class="dropdown">
											<a class="dropdown-item dropdown-toggle" href="#">
												Tentang Kami
											</a>
										</li>
										<li class="dropdown">
											<a class="dropdown-item dropdown-toggle" href="#">
												Kontak
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<a class="btn btn-gradient btn-rounded font-weight-semibold px-4 ml-3 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}" href="https://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank">Login</a>
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
