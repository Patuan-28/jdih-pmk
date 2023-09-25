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
			<h6 class="m-0 font-weight-bold text-primary">Detail Peraturan</h6>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col">
					<label>Tipe Dokumen</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['tipe'] ?>" readonly>
				</div>
				<div class="col">
					<label>Judul</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['judul'] ?>" readonly>
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<label>Nomor</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['nomor'] ?>" readonly>
				</div>
				<div class="col">
					<label>Tahun</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['tahun'] ?>" readonly>
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<label>Bentuk</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['bentuk'] ?>" readonly>
				</div>
				<div class="col">
					<label>Kategori</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['kategori'] ?>" readonly>
				</div>
				<div class="col">
					<label>Status</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['status'] ?>" readonly>
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<label>Subjek</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['subjek'] ?>" readonly>
				</div>
				<div class="col">
					<label>T.E.U</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['teu'] ?>" readonly>
				</div>
				<div class="col">
					<label>Sumber</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['sumber'] ?>" readonly>
				</div>
			</div><br>
			<div class="row">
				<div class="col">
					<label>Tanggal Diundangkan</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['invited_date'] ?>" readonly>
				</div>
				<div class="col">
					<label>Dibuat Pada</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['created_date'] ?>" readonly>
				</div>
				<div class="col">
					<label>Dibuat Oleh</label>
					<input type="text" class="form-control" placeholder="<?= $peraturan['created_by'] ?>" readonly>
				</div>
			</div><br>
			<a href="/peraturan/edit/<?= $peraturan['id'];  ?>" data-toggle="modal" data-target="#modal-edit" class="btn btn-warning">Edit</a>

			<form action="/peraturan/delete/<?= $peraturan['id']; ?>" method="post" class="d-inline">
				<?= csrf_field(); ?>
				<input type="hidden" name="_method" value="DELETE">
				<button type="submit" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</button>
			</form>

			<div class="my-2"></div>
			<a href="/peraturan/peraturan" class="btn btn-primary">Kembali</a>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

<!-- /.container-fluid -->
<div class="modal fade" id="modal-edit">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ubah Peraturan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?= base_url('peraturan/edit/'.$peraturan['id']) ?>">
        <?= csrf_field(); ?>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <label for="budget_name">Tipe Dokumen</label>
              <select class="custom-select" name="tipe">
                <?php foreach ($tipe as $key) : ?>
                <option value="<?= $key['tipe'] ?>"><?= $key['tipe'] ?></option>
              <?php endforeach; ?>
              </select>
            </div>
            <div class="col">
              <label for="budget_plan">Judul Peraturan</label>
              <input type="text" class="form-control" placeholder="Judul Peraturan" name="judul" value="<?= $peraturan['judul'] ?>" required>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="departement">Nomor Peraturan</label>
              <input type="text" class="form-control" placeholder="Nomor Peraturan" name="nomor" value="<?= $peraturan['nomor'] ?>">
            </div>
            <div class="col">
              <label for="budget_price">Tahun Peraturan</label>
              <input type="text" class="form-control" placeholder="Tahun Peraturan" name="tahun" required value="<?= $peraturan['tahun'] ?>">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="spesifikasi_teknis">Bentuk</label>
              <select class="custom-select" name="bentuk">
                <?php foreach ($bentuk as $key) : ?>
                <option value="<?= $key['bentuk'] ?>"><?= $key['bentuk'] ?><strong> - </strong><?= $key['singkatan'] ?></option>
              <?php endforeach; ?>
              </select>
            </div>
            <div class="col">
              <label for="kualifikasi_vendor">Kategori</label>
              <select class="custom-select" name="kategori">
                <?php foreach ($kategori as $key) : ?>
                <option value="<?= $key['kategori'] ?>"><?= $key['kategori'] ?></option>
              <?php endforeach; ?>
              </select>
            </div>
            <div class="col">
              <label for="spesifikasi_teknis">Status</label>
              <select class="custom-select" name="status">
                <?php foreach ($status as $key) : ?>
                <option value="<?= $key['status'] ?>"><?= $key['status'] ?></option>
              <?php endforeach; ?>
              </select>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="kualifikasi_vendor">Subjek</label>
              <input type="text" class="form-control" placeholder="Subjek" name="subjek" value="<?= $peraturan['subjek'] ?>" required>
            </div>
            <div class="col">
              <label for="teu">T.E.U</label>
              <input type="text" class="form-control" placeholder="Asal" name="teu" value="<?= old('teu'); ?>">
            </div>
            <div class="col">
              <label for="sumber">Sumber</label>
              <input type="text" class="form-control" placeholder="Sumber" name="sumber" value="<?= old('sumber'); ?>">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="budget_output">Tanggal Diundangkan</label>
              <input type="text" class="form-control" placeholder="YYYY" name="invited_date" value="<?= $peraturan['invited_date'] ?>">
            </div>
            <div class="col">
              <label for="budget_output">Dibuat Oleh</label>
              <input type="text" class="form-control" placeholder="Nama Pembuat" name="created_by" value="<?= $peraturan['created_by'] ?>">
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

<?= $this->endSection(); ?>