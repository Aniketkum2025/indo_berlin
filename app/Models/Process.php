<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Process extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'process';
    protected $fillable = [
         'process_title'
        ,'process_description' 
        ,'course_id' 
       
    ];
}
