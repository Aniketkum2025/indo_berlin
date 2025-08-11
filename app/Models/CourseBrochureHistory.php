<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseBrochureHistory extends Model
{
    protected $connection = 'mysql_website';
    protected $table = "course_brochure_history";
    protected $guarded = [];
}
