<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseCity extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'course_city';
    //$table is create to stop adding 's' in last of table name by Eloquent model
    
    protected $fillable = [
         'course_id','city_name','country_id'
    ];

}
