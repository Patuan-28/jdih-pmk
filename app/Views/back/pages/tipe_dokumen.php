<?= $this->extend('back/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Tipe Dokumen Peraturan</h1>
	<p class="mb-4">Database Jaringan Dokumentasi dan Informasi Hukum (JDIH)</p>

		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Data Tipe Dokumen</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Tipe</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Kode</th>
                                <th>Tipe</th>
							</tr>
						</tfoot>
						<tbody>
							<?php foreach ($tipe as $t) : ?>
							<tr>
								<td><?= $t['kode_tipe'] ?></td>
								<td><?= $t['tipe'] ?></td>
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