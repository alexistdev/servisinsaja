<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<!-- Header Start -->
<?php $this->load->view('frontend/template/v_header') ?>
<!-- /End Header -->

<body>
<!--  Start Konten	-->
<div class="body">
	<?php $this->load->view('frontend/template/v_navbar') ?>
	<?php $this->load->view('frontend/konten/k_home') ?>
</div>
<!-- /End Konten -->

<!-- Vendor -->
<script src="<?= base_url('assets/frontend/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/popper/umd/popper.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/common/common.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/vide/jquery.vide.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?= base_url('assets/frontend/'); ?>js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?= base_url('assets/frontend/'); ?>vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url('assets/frontend/'); ?>vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Theme Custom -->
<script src="<?= base_url('assets/frontend/'); ?>js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?= base_url('assets/frontend/'); ?>js/theme.init.js"></script>
</body>
</html>
