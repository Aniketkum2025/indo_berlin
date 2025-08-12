<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectsCourse extends Model
{
    protected $connection = 'mysql_website';
    protected $guarded = [];
    protected $table = 'projects_course';

    public function projects()
    {
        return $this->hasMany(ProjectDetails::class, 'course_id', 'id');
    }
}
