<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Placementstory extends Model {
	use SoftDeletes;
	protected $connection = 'mysql_website';
	protected $table = 'placement_story';
	//$table is create to stop adding 's' in last of table name by Eloquent model
	protected $fillable = [
		'logo',
		'story',
		'name',
		'category',
		'photo',
		'link',
	];
}
