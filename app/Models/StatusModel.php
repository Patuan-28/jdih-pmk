<?php 

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{

	protected $table = 'status';
	protected $allowedFields = [
		'kode'.
		'status'
	];

	//dates
	protected $useTimestamps = true;
}
?>