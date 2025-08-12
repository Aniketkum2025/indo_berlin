<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crmcourse extends Model
{
    protected $connection = 'mysql_website';
    protected $guarded = [];

    public function courses(){
        return $this->belongsToMany(Course::class, 'crmcourse_course', 'crmcourse_id', 'course_id');
    }
}