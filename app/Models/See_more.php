<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class See_more extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'seemore';
    protected $fillable = [
        'content',
        'course_id',
        'slug',
      
   ];
}
