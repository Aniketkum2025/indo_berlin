<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ppc_certificate extends Model
{
    use SoftDeletes;
	protected $connection = 'mysql_website';
	protected $table = 'ppc_certificate';

    protected $fillable = [
		'ppc_course_id',
		'country_id',
	    'image',
	];

	public function country()
	{
		return $this->belongsTo(Country::class);
	}
}
