<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accrediation extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'accrediation_affilation';
    protected $fillable = [
        'cat_id',
        'heading',
        'link',
        'logo_url',
        'serial_number',
   ];

   public function category(){
    return $this->belongsTo('App\Accrediationcategory', 'cat_id');
}
}
