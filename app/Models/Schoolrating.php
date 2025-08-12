<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schoolrating extends Model {
	use SoftDeletes;
	protected $connection = 'mysql_website';
	protected $table = 'school_rating';
	//$table is create to stop adding 's' in last of table name by Eloquent model
	protected $fillable = [
		'school_name',
		'rating',
	];
}
