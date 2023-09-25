<?php 

namespace App\Models;

use CodeIgniter\Model;

class TipePeraturanModel extends Model
{

	protected $table = 'tipe';
	protected $allowedFields = [
		'kode'.
		'tipe'
	];

	//dates
	protected $useTimestamps = true;
}
?>