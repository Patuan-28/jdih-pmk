<?= $this->extend('back/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Data Peraturan</h1>
	<p class="mb-4">Database Peraturan Jaringan Dokumentasi dan Informasi Hukum (JDIH)</p>
  <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
      <?= session()->getFlashdata('pesan'); ?>
    </div>

  <?php elseif (session()->getFlashdata('pesan_hapus')) : ?>
    <div class="alert alert-danger" role="alert">
      <?= session()->getFlashdata('pesan_hapus'); ?>
    </div>

  <?php elseif (session()->getFlashdata('pesan_update')) : ?>
    <div class="alert alert-success" role="alert">
      <?= session()->getFlashdata('pesan_update'); ?>
    </div>
  <?php endif; ?>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
   <div class="card-header py-3">
    <div class="my-2"></div>
    <a class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#modal-lg">
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
      <th>Tipe Dokumen</th>
      <th>Judul Peraturan</th>
      <th>Nomor</th>
      <th>Tahun</th>
      <th>Bentuk</th>
      <th>Kategori</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>Tipe Dokumen</th>
      <th>Judul Peraturan</th>
      <th>Nomor</th>
      <th>Tahun</th>
      <th>Bentuk</th>
      <th>Kategori</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </tfoot>
  <tbody>
    <?php foreach ($peraturan as $p) : ?>
      <tr>
        <td><?= $p['tipe'] ?></td>
        <td><?= $p['judul'] ?></td>
        <td><?= $p['nomor'] ?></td>
        <td><?= $p['tahun'] ?></td>
        <td><?= $p['bentuk'] ?></td>
        <td><?= $p['kategori'] ?></td>
        <td><?= $p['status'] ?></td>
        <td>
          <a href="peraturan/<?= $p['judul'] ?>" class="btn btn-success">Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
</div>
<!-- /.container-fluid -->
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Peraturan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?= base_url('peraturan/create') ?>">
        <?= csrf_field(); ?>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <label for="budget_name">Tipe Dokumen</label>
              <select class="custom-select" name="tipe">
                <option>--Pilih Tipe Dokumen--</option>
                <?php foreach ($tipe as $key) : ?>
                <option value="<?= $key['tipe'] ?>"><?= $key['tipe'] ?></option>
              <?php endforeach; ?>
              </select>
            </div>
            <div class="col">
              <label for="budget_plan">Judul Peraturan</label>
              <input type="text" class="form-control" placeholder="Judul Peraturan" name="judul" value="<?= old('judul'); ?>">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="departement">Nomor Peraturan</label>
              <input type="text" class="form-control" placeholder="Nomor Peraturan" name="nomor" value="<?= old('nomor'); ?>">
            </div>
            <div class="col">
              <label for="budget_price">Tahun Peraturan</label>
              <input type="text" class="form-control" placeholder="Tahun Peraturan" name="tahun" value="<?= old('tahun'); ?>">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="spesifikasi_teknis">Bentuk</label>
              <select class="custom-select" name="bentuk">
                <option>--Pilih Bentuk/Jenis Peraturan--</option>
                <?php foreach ($bentuk as $key) : ?>
                <option value="<?= $key['bentuk'] ?>"><?= $key['bentuk'] ?><strong> - </strong><?= $key['singkatan'] ?></option>
              <?php endforeach; ?>
              </select>
            </div>
            <div class="col">
              <label for="kualifikasi_vendor">Kategori</label>
              <select class="custom-select" name="kategori">
                <option>--Pilih Kategori Peraturan--</option>
                <?php foreach ($kategori as $key) : ?>
                <option value="<?= $key['kategori'] ?>"><?= $key['kategori'] ?></option>
              <?php endforeach; ?>
              </select>
            </div>
            <div class="col">
              <label for="spesifikasi_teknis">Status</label>
              <select class="custom-select" name="status">
                <option>--Pilih Status--</option>
                <?php foreach ($status as $key) : ?>
                <option value="<?= $key['status'] ?>"><?= $key['status'] ?></option>
              <?php endforeach; ?>
              </select>
            </div>x
          </div>
          <br>
          <div class="row">
            <div class="col">
              <label for="subjek">Subjek</label>
              <input type="text" class="form-control" placeholder="Subjek" name="subjek" value="<?= old('subjek'); ?>">
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
              <input type="text" class="form-control" placeholder="YYYY" name="invited_date" value="<?= old('invited_date'); ?>">
            </div>
            <div class="col">
              <label for="budget_output">Dibuat Oleh</label>
              <input type="text" class="form-control" placeholder="Nama Pembuat" name="created_by" value="<?= old('created_by'); ?>">
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


<?= $this->endSection(); ?>