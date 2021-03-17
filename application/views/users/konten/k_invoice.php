<?php
defined('BASEPATH') or exit('No direct script access allowed');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Invoice</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">Home</a></li>
						<li class="breadcrumb-item active">Invoice</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<!-- Start Pesan -->
					<?php
					echo $this->session->flashdata('pesan1');
					echo $this->session->flashdata('pesan2'); ?>
					<!-- End Pesan -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card card-dark">
						<div class="card-header">
							<h3 class="card-title">Data Invoice</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="tableInvoice" class="table table-bordered table-hover" style="width: 100%">
								<thead>
								<tr>
									<th class="text-center">No</th>
									<th class="text-center">Kode Servis</th>
									<th class="text-center">Total Harga</th>
									<th class="text-center">Status</th>
									<th class="text-center">Action</th>
								</tr>
								</thead>
								<tbody>
									<?php $no=1;
									foreach($dataInvoice as $rowInvoice) :?>
										<tr>
											<td class="text-center"><?= $no++; ?></td>
											<td class="text-center"><?= cetak($rowInvoice['kode']); ?></td>
											<td class="text-center">Rp.<?= cetak($rowInvoice['total_invoice']); ?></td>
											<td class="text-center">
												<?php if(cetak($rowInvoice['status_invoice']) == 2) { ?>
													<small class="badge badge-warning"> MENUNGGU PEMBAYARAN </small>
												<?php } else { ?>
													<small class="badge badge-success"> LUNAS </small>
												<?php } ?>
											</td>
											<td class="text-center">
												<button class="btn btn-sm btn-primary">INFO</button>
											</td>

										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
