<?php 
namespace App\Controllers;

use App\Models\StatusModel;
use App\Models\KategoriModel;
use App\Models\BentukPeraturanModel;
use App\Models\TipePeraturanModel;
use App\Models\PeraturanModel;

class Peraturan extends BaseController
{
	public function __construct()
	{
		$this->statusModel = new StatusModel();
		$this->kategoriModel = new KategoriModel();
		$this->bentukModel = new BentukPeraturanModel();
		$this->tipeModel = new TipePeraturanModel();
		$this->peraturanModel = new PeraturanModel();
	}

	// === Dashboard ===
	public function index()
	{
		//$peraturan = $peraturanModel->get_peraturan();

		$data = [
			'title' => 'Dashboard Admin',
			'totalPeraturan' => $this->peraturanModel->totalPeraturan()
			//'peraturan' => $this->findAll['peraturan'],
		];

			//$peraturanModel = new PeraturanModel();

		return view('back/pages/index', $data);

		/*$model = new PeraturanModel();
		print_r($model->findAll());*/
	}

	// === Kategori Peraturan ===
	protected $kategoriModel;
	public function kategori_peraturan()
	{
		$kategoriModel = new KategoriModel();
		$kategori = $this->kategoriModel->findAll();

		$data = [
			'title' => 'Kategori Peraturan',
			'kategori' => $kategori
		];

		return view('back/pages/kategori_peraturan', $data);
	}

	// === Status ===
	protected $statusModel;
	public function status()
	{
		$statusModel = new StatusModel();
		$status = $this->statusModel->findAll();

		$data = [
			'title' => 'Status',
			'status' => $status
		];

		return view('back/pages/status', $data);
	}

	// === Tipe Dokumen ===
	protected $tipeModel;
	public function tipe_dokumen()
	{
		$tipeModel = new TipePeraturanModel();
		$tipe = $this->tipeModel->findAll();

		$data = [
			'title' => 'Tipe Dokumen',
			'tipe' => $tipe
		];

		return view('back/pages/tipe_dokumen', $data);
	}

	// === Bentuk Peraturan ===
	protected $bentukModel;
	public function bentuk_peraturan()
	{
		$bentukModel = new BentukPeraturanModel();
		$bentuk = $this->bentukModel->findAll();

		$data = [
			'title' => 'Bentuk Peraturan',
			'bentuk' => $bentuk
		];

		return view('back/pages/bentuk_peraturan', $data);
	}

	// === Peraturan ===
	protected $peraturanModel;
	public function peraturan()
	{
		$statusModel = new StatusModel();
		$status = $this->statusModel->findAll();

		$kategoriModel = new KategoriModel();
		$kategori = $this->kategoriModel->findAll();

		$bentukModel = new BentukPeraturanModel();
		$bentuk = $this->bentukModel->findAll();

		$tipeModel = new TipePeraturanModel();
		$tipe = $this->tipeModel->findAll();

		$peraturanModel = new PeraturanModel();
		// $peraturan = $this->peraturanModel->findAll();

		$data = [
			'title' => 'Data Peraturan',
			'peraturan' => $this->peraturanModel->getPeraturan(),
			'tipe' => $tipe,
			'bentuk' => $bentuk,
			'kategori' => $kategori,
			'status' => $status
		];

		if(empty($data['peraturan'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Peraturan ' . $judul . ' tidak ditemukan');
		}

		return view('back/pages/peraturan', $data);
	}

	// === Detail Peraturan ===
	public function detail($judul)
	{
		$statusModel = new StatusModel();
		$status = $this->statusModel->findAll();

		$kategoriModel = new KategoriModel();
		$kategori = $this->kategoriModel->findAll();

		$bentukModel = new BentukPeraturanModel();
		$bentuk = $this->bentukModel->findAll();

		$tipeModel = new TipePeraturanModel();
		$tipe = $this->tipeModel->findAll();

		$peraturanModel = new PeraturanModel();
		// $peraturan = $this->peraturanModel->findAll();

		$data = [
			'title' => 'Detail Peraturan',
			'peraturan' => $this->peraturanModel->getPeraturan($judul),
			'tipe' => $tipe,
			'bentuk' => $bentuk,
			'kategori' => $kategori,
			'status' => $status
		];
		return view('back/pages/detail_peraturan', $data);
	}

	// === Tambah Data ===
	public function create()
	{
		$data = [
			'tipe' => $this->request->getPost('tipe'),
			'judul' => $this->request->getPost('judul'),
			'nomor' => $this->request->getPost('nomor'),
			'tahun' => $this->request->getPost('tahun'),
			'bentuk' => $this->request->getPost('bentuk'),
			'kategori' => $this->request->getPost('kategori'),
			'status' => $this->request->getPost('status'),
			'subjek' => $this->request->getPost('subjek'),
			'invited_date' => $this->request->getPost('invited_date'),
			'created_by' => $this->request->getPost('created_by'),
			'created_date' => $this->request->getPost('created_date')
		];

		$success = $this->peraturanModel->create($data);
		if($success) {
			session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
			return redirect()->to(base_url('peraturan/peraturan'));
		}

		// dd($data);
		// $data = [
		// 	'title' => 'Tambah Peraturan'
		// ];

		// return view('back/pages/create_peraturan', $data);	
	}

	// public function save()
	// {
		// $this->peraturanModel->save([
		// 	'tipe' => $this->request->getVar('tipe'),
		// 	'judul' => $this->request->getVar('judul'),
		// 	'nomor' => $this->request->getVar('nomor'),
		// 	'tahun' => $this->request->getVar('tahun'),
		// 	'bentuk' => $this->request->getVar('bentuk'),
		// 	'kategori' => $this->request->getVar('kategori'),
		// 	'status' => $this->request->getVar('status'),
		// 	'abstrak' => $this->request->getVar('abstrak'),
		// 	'invited_date' => $this->request->getVar('invited_date'),
		// 	'created_by' => $this->request->getVar('created_by'),
		// 	'created_date' => $this->request->getVar('created_date')
		// ]);

		// return redirect()->to('peraturan/peraturan');
	// }

	// === Hapus Data ===
	public function delete($id)
	{
		$this->peraturanModel->delete($id);
		session()->setFlashdata('pesan_hapus', 'Data berhasil dihapus');
		return redirect()->to('peraturan/peraturan');
	}

	// === Update Data ===
	public function edit($id)
	{
		$this->peraturanModel->update($id, [
			'tipe' => $this->request->getPost('tipe'),
			'judul' => $this->request->getPost('judul'),
			'nomor' => $this->request->getPost('nomor'),
			'tahun' => $this->request->getPost('tahun'),
			'bentuk' => $this->request->getPost('bentuk'),
			'kategori' => $this->request->getPost('kategori'),
			'status' => $this->request->getPost('status'),
			'subjek' => $this->request->getPost('subjek'),
			'teu' => $this->request->getPost('teu'),
			'sumber' => $this->request->getPost('sumber'),
			'invited_date' => $this->request->getPost('invited_date'),
			'created_by' => $this->request->getPost('created_by'),
			'created_date' => $this->request->getPost('created_date')
		]);

		// dd($data);

		// $success = $this->peraturanModel->update($id, $data);
		// if($success) {
		session()->setFlashdata('pesan_update', 'Data berhasil diupdate');
		return redirect()->to(base_url('peraturan/peraturan'));
		// }
		// $data = [
		// 	'title' => 'Edit Peraturan',
		// 	'peraturan' => $this->peraturanModel->getPeraturan($judul)
		// ];

		// return view('back/pages/edit_peraturan', $data);
	}

	// === Update Data ===
	// public function update($id)
	// {
	// 	$judul = url_title($this->request->getVar('judul'), '-', true);
	// 	$this->peraturanModel->save([
	// 		'id' => $id,
	// 		'tipe' => $this->request->getVar('tipe'),
	// 		'judul' => $judul,
	// 		'nomor' => $this->request->getVar('nomor'),
	// 		'tahun' => $this->request->getVar('tahun'),
	// 		'bentuk' => $this->request->getVar('bentuk'),
	// 		'kategori' => $this->request->getVar('kategori'),
	// 		'status' => $this->request->getVar('status'),
	// 		'subjek' => $this->request->getVar('subjek'),
	// 		'invited_date' => $this->request->getVar('invited_date'),
	// 		'created_by' => $this->request->getVar('created_by'),
	// 		'created_date' => $this->request->getVar('created_date')
	// 	]);

	// 	session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
		
	// 	return redirect()->to('peraturan/peraturan');

		// $this->peraturanModel->save([
		// 	'id' => $id,
		// 	'judul' => $this->request->getVar('judul'),
		// 	'nomor' => $this->request->getVar('nomor'),
		// 	'tahun' => $this->request->getVar('tahun'),
		// 	'bentuk' => $this->request->getVar('bentuk'),
		// 	'kategori' => $this->request->getVar('kategori'),
		// 	'status' => $this->request->getVar('status'),
		// 	'abstrak' => $this->request->getVar('abstrak'),
		// 	'invited_date' => $this->request->getVar('invited_date'),
		// 	'created_by' => $this->request->getVar('created_by'),
		// 	'created_date' => $this->request->getVar('created_date')
		// ]);

		// session()->setFlashdata('pesan', 'Data berhasil diubah');

		// return redirect()->to('peraturan/peraturan');
	// }

	// public function totalPeraturan()
	// {
	// 	$data['count'] = $this->db->table($this->table)->lts();
	// 	return view('index',)
	// }
}
?>