<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Placedstudent extends Model {
	use SoftDeletes;
	protected $connection = 'mysql_website';
	protected $table = 'placed_student';
	//$table is create to stop adding 's' in last of table name by Eloquent model
	protected $guarded = [];
}