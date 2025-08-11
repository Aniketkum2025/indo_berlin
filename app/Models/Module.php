<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'module';
    protected $fillable = [
         'module_title'
        ,'module_parent_id' 
        ,'course_id'
        ,'order_by' 
        ,'module_logo' 
       
    ];
}
