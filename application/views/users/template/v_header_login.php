<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= cetak($title); ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Web Icon -->
	<link rel="icon" href="<?= base_url('gambar/') ?>myicon.png">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('vendor/almasaeed2010/adminlte') ?>/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= base_url('vendor/almasaeed2010/adminlte') ?>/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Pace -->
	<link rel="stylesheet" href="<?= base_url('vendor/almasaeed2010/adminlte') ?>/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
	<style>
		.boximage {
			position: relative;
			text-align: center;
			color: white;
		}
		/* Bottom left text */
		.bottom-left1{
			position: absolute;
			top: 40%;
			left: 20%;
			font-size: 24px;
			font-weight: 900;
			transform: translate(-50%, 0%);
		}
		.bottom-left2{
			position: absolute;
			top: 50%;
			left: 30%;
			font-size: 24px;
			font-weight: 900;
			transform: translate(-50%, 0%);
		}
		.myloginbox {
			background-image: url("gambar/box_lg.png");
		}
		.myloginBg {
			background-image: url("gambar/login_bg.png");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
