<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collegelogo extends Model {
	use SoftDeletes;
	protected $connection = 'mysql_website';
	protected $table = 'college_logo';
	//$table is create to stop adding 's' in last of table name by Eloquent model
	protected $fillable = [
		'college_name',
		'image',
	];

	public function trainingstory() {
		return $this->hasMany(Collegetrainingreview::class, 'college_logo_id');
	}
}