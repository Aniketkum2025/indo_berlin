<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skills extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'skills_covered';
    protected $fillable = [
        'skill',
        'course_id',
   ];
}