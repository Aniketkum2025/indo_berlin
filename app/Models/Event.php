<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $connection = 'mysql2';
    protected $guarded = [];

    public function courses()
    {
        return $this->belongsTo(CRMCourse1::class,'course_id','id');
    }
}
   