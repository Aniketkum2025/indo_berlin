<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ppc_modules extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'ppc_modules';
    //$table is create to stop adding 's' in last of table name by Eloquent model
    
    protected $fillable = [
         'ppc_course_id'
        ,'text'
        ,'image'
        ,'heading'

    ];

}    