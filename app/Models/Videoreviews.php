<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Videoreviews extends Model {

	protected $connection = 'mysql_website';
	use SoftDeletes;
	protected $table = 'video_review';
	//$table is create to stop adding 's' in last of table name by Eloquent model
	protected $fillable = [
		'course_id',
		'heading',
		'link',
		'date',
	];
}