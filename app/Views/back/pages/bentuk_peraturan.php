<?= $this->extend('back/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Bentuk Peraturan</h1>
	<p class="mb-4">Database Jaringan Dokumentasi dan Informasi Hukum (JDIH)</p>

		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Bentuk Peraturan</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Bentuk</th>
								<th>Bentuk Singkat</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Kode</th>
								<th>Bentuk</th>
								<th>Bentuk Singkat</th>
							</tr>
						</tfoot>
						<tbody>
							<?php foreach ($bentuk as $b) : ?>
							<tr>
								<td><?= $b['kode_bentuk']; ?></td>
								<td><?= $b['bentuk']; ?></td>
								<td><?= $b['singkatan']; ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container-fluid -->


<?= $this->endSection(); ?>