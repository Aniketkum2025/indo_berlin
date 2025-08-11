<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseHistory extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'course_history';
    protected $guarded = [];
}
