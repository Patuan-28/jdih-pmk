<?= $this->extend('back/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Status Peraturan</h1>
	<p class="mb-4">Database Jaringan Dokumentasi dan Informasi Hukum (JDIH)</p>

		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Status Peraturan</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Status</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Kode</th>
                                <th>Status</th>
							</tr>
						</tfoot>
						<tbody>
							<?php foreach ($status as $s) : ?>
							<tr>
								<td><?= $s['kode_status']; ?></td>
								<td><?= $s['status']; ?></td>
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