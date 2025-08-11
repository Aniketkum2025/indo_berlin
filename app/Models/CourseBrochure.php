<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseBrochure extends Model
{
    protected $connection = 'mysql_website';
    protected $table = "course_brochure";
    protected $guarded = [];
}
