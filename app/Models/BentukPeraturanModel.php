<?php 

namespace App\Models;

use CodeIgniter\Model;

class BentukPeraturanModel extends Model
{

	protected $table = 'bentuk';
	protected $allowedFields = [
		'kode'.
		'bentuk'.
		'singkatan'
	];

	//dates
	protected $useTimestamps = true;
}
?>