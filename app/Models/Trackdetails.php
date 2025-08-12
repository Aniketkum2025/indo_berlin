<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trackdetails extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'track_details';
    protected $fillable = ['current_url','track_id','url','session_id','source','email','mobile','course_name'];
}
