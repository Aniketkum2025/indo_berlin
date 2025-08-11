<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Csr extends Model {
	use SoftDeletes;
	protected $connection = 'mysql_website';
	protected $table = 'csr';
	//$table is create to stop adding 's' in last of table name by Eloquent model
	protected $fillable = [
		'image_url',
		'c_id',
	];
}
