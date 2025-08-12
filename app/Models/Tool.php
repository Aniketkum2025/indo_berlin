<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tool extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'tool';
    protected $fillable = [
        'tool_title'
       ,'tool_image' 
       ,'course_id' 
      
   ];
}
