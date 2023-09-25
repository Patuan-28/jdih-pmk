<?= $this->extend('back/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Berita</h1>
	<p class="mb-4">Database Jaringan Dokumentasi dan Informasi Hukum (JDIH)</p>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#modal-tambah-berita">
				<span class="icon text-white-50">
					<i class="fas fa-plus"></i>
				</span>
				<span class="text">Tambah</span>
			</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Judul</th>
							<th>Deskripsi</th>
							<th>Kategori</th>
							<th>Foto</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Judul</th>
							<th>Deskripsi</th>
							<th>Kategori</th>
							<th>Foto</th>
							<th>Aksi</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach ($berita as $b) : ?>
							<tr>
								<td><?= $b['judul'] ?></td>
								<td><?= $b['deskripsi'] ?></td>
								<td><?= $b['kategori'] ?></td>
								<td><?= $b['foto'] ?></td>
								<td>
									<a href="/admin/berita/detail_berita/<?= $b['judul'] ?>" class="btn btn-success">Detail</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

<div class="modal fade" id="modal-tambah-berita">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Berita</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?= base_url('admin/berita/create_berita') ?>">
        <?= csrf_field(); ?>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <label for="judul">Judul Berita</label>
              <input type="text" class="form-control" placeholder="Judul Berita" name="judul" value="<?= old('judul'); ?>">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="kategori">Kategori Berita</label>
              <input type="text" class="form-control" placeholder="Kategori Berita" name="kategori" value="<?= old('kategori'); ?>">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="deskripsi">Deskripsi</label>
              <textarea type="text" class="form-control" placeholder="Deskripsi" name="deskripsi" value="<?= old('deskripsi'); ?>"></textarea>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="foto">Foto</label>
              <textarea type="text" class="form-control" placeholder="foto" name="foto" value="<?= old('foto'); ?>"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-icon-split">
            <span class="text">Submit</span>
          </button>
        </div>
      </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

</div>
<!-- /.container-fluid -->


<?= $this->endSection(); ?>