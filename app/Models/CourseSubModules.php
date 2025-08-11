<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseSubModules extends Model
{
    protected $connection = 'mysql_website';
    protected $guarded = [];
    protected $table = 'course_submodules';
    protected $fillable = [
   'module_id',
   'title',
   'learning_objective',
   'duration',
   'value',
   'complexity',
   'created_at',
   'updated_at',
   'show_order',
   'is_deleted'
    ];

    public function course_modules()
    {
        return $this->belongsTo('App\CourseModules','id')->where('is_deleted',0);
    }
}