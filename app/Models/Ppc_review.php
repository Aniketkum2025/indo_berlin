<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ppc_review extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'ppc_review';
    //$table is create to stop adding 's' in last of table name by Eloquent model
    
    protected $fillable = [
         'ppc_course_id'
        ,'review'
        ,'image'
        ,'name'
        ,'designation'
        ,'stars'
        ,'country_id'
    ];
    
    public function country()
	{
		return $this->belongsTo(Country::class);
	}
}    