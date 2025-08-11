<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'metas';
    protected $fillable = [
         'meta_title'
        ,'meta_description' 
        ,'course_id' ,
         'slug'
       
    ];
}
