<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'gallary';
    protected $fillable = [
         'gallery_image'
        ,'gallery_title' 
        ,'course_id' 
       
    ];
}
