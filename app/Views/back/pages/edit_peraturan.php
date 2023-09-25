<?= $this->extend('back/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Data Peraturan</h1>
	<p class="mb-4">Database Jaringan Dokumentasi dan Informasi Hukum (JDIH)</p>

	<!-- Basic Card Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Edit Peraturan</h6>
		</div>
		<form action="/peraturan/update/<?= $peraturan['id']; ?>" method="post">
			<?= csrf_field(); ?>
			<input type="hidden" name="judul" value="<?= $peraturan['judul']; ?>">
			<div class="card-body">
				<div class="row">
					<div class="col">
						<label for="tipe">Tipe Dokumen</label>
						<input type="text" class="form-control" id="tipe" name="tipe" value="<?= $peraturan['tipe'] ?>">
					</div>
					<div class="col">
						<label for="judul">Judul</label>
						<input type="text" class="form-control" name="judul" value="<?= $peraturan['judul'] ?>">
					</div>
				</div><br>
				<div class="row">
					<div class="col">
						<label for="nomor">Nomor</label>
						<input type="text" class="form-control" name="nomor" value="<?= $peraturan['nomor'] ?>">
					</div>
					<div class="col">
						<label for="tahun">Tahun</label>
						<input type="text" class="form-control" name="tahun" value="<?= $peraturan['tahun'] ?>">
					</div>
				</div><br>
				<div class="row">
					<div class="col">
						<label for="bentuk">Bentuk</label>
						<input type="text" class="form-control" name="bentuk" value="<?= $peraturan['bentuk'] ?>">
					</div>
					<div class="col">
						<label>Kategori</label>
						<input type="text" class="form-control" name="kategori" value="<?= $peraturan['kategori'] ?>">
					</div>
					<div class="col">
						<label>Status</label>
						<input type="text" class="form-control" name="status" value="<?= $peraturan['status'] ?>">
					</div>
				</div><br>
				<div class="row">
					<div class="col">
						<label>Subjek</label>
						<input type="text" class="form-control" name="subjek" value="<?= $peraturan['subjek'] ?>">
					</div>
				</div><br>
				<div class="row">
					<div class="col">
						<label>Tanggal Diundangkan</label>
						<input type="text" class="form-control" name="invited_date" value="<?= $peraturan['invited_date'] ?>">
					</div>
					<div class="col">
						<label>Dibuat Pada</label>
						<input type="text" class="form-control" name="created_date" value="<?= $peraturan['created_date'] ?>">
					</div>
					<div class="col">
						<label>Dibuat Oleh</label>
						<input type="text" class="form-control" name="created_by" value="<?= $peraturan['created_by'] ?>">
					</div>
				</div><br>
				<button type="submit" class="btn btn-primary">Save</button>
				<div class="my-2"></div>
				<a href="/peraturan/peraturan" class="btn btn-primary">Kembali</a>
			</div>
		</form>
	</div>
</div>
<!-- /.container-fluid -->

<?= $this->endSection(); ?>