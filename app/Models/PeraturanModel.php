<?php 

namespace App\Models;

use CodeIgniter\Model;

class PeraturanModel extends Model
{

	protected $table = 'peraturan';
	protected $allowedFields = [
		'tipe',
		'judul',
		'nomor',
		'tahun',
		'bentuk',
		'kategori',
		'status',
		'subjek',
		'teu',
		'sumber',
		'invited_date',
		'created_by',
		'created_date'
	];

	//dates
	protected $useTimestamps = true;

	public function getPeraturan($judul = false)
	{
		if($judul == false){
			return $this->findAll();
		}

		return $this->where(['judul' => $judul]) -> first();
	}

	public function create($data)
	{
		return $this->db->table('peraturan')->insert($data);
	}

	// public function update($id, $data)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->table('peraturan')->update(`tipe`,`judul`,`nomor`,`tahun`,`bentuk`,`kategori`,`status`,`subjek`,`teu`,`sumber`,`invited_date`,`created_by`,`created_date`,$data);
	// }

	public function totalPeraturan()
	{
		return $this->db->table('peraturan')->countAll();
	}
}
?>