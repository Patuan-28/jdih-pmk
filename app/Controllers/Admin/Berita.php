<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\BeritaModel;

class Berita extends BaseController
{
	public function __construct()
	{
		$this->beritaModel = new BeritaModel();
	}
	
	protected $beritaModel;
	public function berita()
	{
		$beritaModel = new BeritaModel();

		$data = [
			'title' => 'Data Berita',
			'berita' => $this->beritaModel->getBerita()
		];

		if(empty($data['berita'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul Berita ' . $judul . ' tidak ditemukan');
		}

		return view('back/pages/berita', $data);
	}

	public function detail_berita($judul)
	{
		$beritaModel = new BeritaModel();

		$data = [
			'title' => 'Detail Berita',
			'berita' => $this->beritaModel->getBerita($judul)
		];
		return view('back/pages/detail_berita', $data);
	}

	public function create_berita()
	{
		$data = [
			'judul' => $this->request->getPost('judul'),
			'deskripsi' => $this->request->getPost('deskripsi'),
			'kategori' => $this->request->getPost('kategori'),
			'foto' => $this->request->getPost('foto'),
			'created_at' => $this->request->getPost('created_at'),
			'updated_at' => $this->request->getPost('updated_at'),
		];

		$success = $this->beritaModel->create($data);
		if($success) {
			session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
			return redirect()->to(base_url('admin/berita/berita'));
		}
	}
}