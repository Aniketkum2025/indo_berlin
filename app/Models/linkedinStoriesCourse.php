<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class linkedinStoriesCourse extends Model
{
    protected $connection = 'mysql_website';
    protected $fillable = [
        'linkedin_stories_id','course_id'
    ];
    protected $table = 'linkedin_stories_course';
}
