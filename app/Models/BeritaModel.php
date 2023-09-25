<?php 

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{

	protected $table = 'berita';
	protected $allowedFields = [
		'judul'.
		'deskripsi'.
		'kategori'.
		'foto'.
		'created_at'.
		'updated_at'
	];

	//dates
	protected $useTimestamps = true;

	public function getBerita($judul = false)
	{
		if($judul == false){
			return $this->findAll();
		}

		return $this->where(['judul' => $judul]) -> first();
	}

	public function create_berita($data)
	{
		return $this->db->table('berita')->insert($data);
	}
}
?>