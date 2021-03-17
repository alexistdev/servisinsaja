<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url('Member'); ?>" class="brand-link">
		<img src="<?= base_url('gambar/logo_s.png'); ?>"
			 alt="AdminLTE Logo"
			 class="brand-image img-circle elevation-3"
			 style="opacity: .8">
		<span class="brand-text font-weight-light">Servisinsaja</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url('gambar/default.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Dashboard</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->

				<li class="nav-item">
					<a href="<?= base_url('user/produk'); ?>" class="nav-link">
						<i class="nav-icon fas fa-boxes"></i>
						<p>
							Produk
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('user/keranjang'); ?>" class="nav-link">
						<i class="nav-icon fas fa-cart-plus"></i>
						<p>
							Keranjang Belanja
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('user/invoice'); ?>" class="nav-link">
						<i class="nav-icon fas fa-credit-card"></i>
						<p>
							Invoice
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('Setting'); ?>" class="nav-link">
						<i class="nav-icon fas fa-cog"></i>
						<p>
							Setting
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
