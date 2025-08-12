<?php

namespace App\Models;
use App\Course;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{

    protected $connection = 'mysql_website';
    protected $table = 'tracks';
    protected $fillable = ['url','session_id','count','current_url','course_name','source','email','mobile'];
}
