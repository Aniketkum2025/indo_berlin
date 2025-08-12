<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usp extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'usp';
    protected $fillable = [
        'usp_title', 
        'usp_logo',
        'usp_description',
        'course_id'
       
    ];
}
