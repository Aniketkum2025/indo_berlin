<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientele extends Model {
	use SoftDeletes;
	protected $connection = 'mysql_website';
	protected $table = 'clientele';
	//$table is create to stop adding 's' in last of table name by Eloquent model
	protected $fillable = [
		'logo',
		'story',
		'name',
		'link',
		'category',
		'project_report',
		'course_id',
		'is_show'
	];

	public function course(){
		return $this->belongsTo(Course::class, 'course_id', 'id');
	}
}
