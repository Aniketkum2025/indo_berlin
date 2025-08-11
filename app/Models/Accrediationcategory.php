<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accrediationcategory extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'accrediation_category';
    protected $fillable = [
        'category',
   ];

   public function accrediations()
   {
   		// return $this->hasMany('App\Accrediation','cat_id')->orderBy('heading');
   		return $this->hasMany('App\Accrediation','cat_id')->orderBy('serial_number','ASC');

   }
}
