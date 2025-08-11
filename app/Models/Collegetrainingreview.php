<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collegetrainingreview extends Model {
	use SoftDeletes;
	protected $connection = 'mysql_website';
	protected $table = 'college_training_reviews';
	//$table is create to stop adding 's' in last of table name by Eloquent model
	protected $fillable = [
		'photo',
		'name',
		'story',
		'link',
		'category',
		'logo',
		'link_name',
		'college_logo_id',
		'year',
	];
}