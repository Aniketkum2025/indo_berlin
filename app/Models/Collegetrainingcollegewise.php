<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collegetrainingcollegewise extends Model {

	protected $connection = 'mysql_website';
	use SoftDeletes;
	protected $table = 'college_training_collegewise';
	//$table is create to stop adding 's' in last of table name by Eloquent model
	protected $fillable = [
		'college_training_reviews_id',
		'photo',
		'name',
		'story',
		'link',
		'category',
		'logo',
	];
}