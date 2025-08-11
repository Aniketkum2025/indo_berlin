<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificate extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'certificate';
    protected $fillable = [
         'certi_title'
        ,'certi_content' 
        ,'certi_image' 
        ,'course_id'
       
    ];
  
}
