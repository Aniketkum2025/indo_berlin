<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseModules extends Model
{
    protected $connection = 'mysql_website';
    protected $guarded = [];
    protected $table = 'course_modules';
    protected $fillable = [
   'course_id',
   'title',
   'learning_objective',
   'show_order',
   'created_by',
   'created_at',
   'updated_at',
   'is_deleted',
   'show_on_website'
    ];

    public function course_sub_modules()
    {
        return $this->hasMany('App\CourseSubModules','module_id')->where('is_deleted',0);
    }
}