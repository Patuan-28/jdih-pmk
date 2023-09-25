<?= $this->extend('back/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Data Berita</h1>
	<p class="mb-4">Database Jaringan Dokumentasi dan Informasi Hukum (JDIH)</p>

	<!-- Basic Card Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Detail Berita</h6>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<label>Judul Berita</label>
					<input type="text" class="form-control" placeholder="<?= $berita['judul'] ?>" readonly>
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<label>Deskripsi</label>
					<input type="text" class="form-control" placeholder="<?= $berita['deskripsi'] ?>" readonly>
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<label>Kategori</label>
					<input type="text" class="form-control" placeholder="<?= $berita['kategori'] ?>" readonly>
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<label>Foto</label>
					<input type="text" class="form-control" placeholder="<?= $berita['foto'] ?>" readonly>
				</div>
			</div><br>

			<div class="my-2"></div>
			<a href="/admin/berita/berita" class="btn btn-primary">Kembali</a>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>