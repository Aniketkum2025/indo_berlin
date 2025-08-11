<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumni_placed extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'alumni_placed';
    protected $fillable = [
        'name',
        'previous_post',
        'previous_logo',
        'current_post',
        'current_logo',
        'emp_image',
        'course_id',
   ];
}