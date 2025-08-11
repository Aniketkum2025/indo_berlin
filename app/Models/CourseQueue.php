<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseQueue extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = "course_queue";
    protected $guarded = [];


    public function course(){
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}
