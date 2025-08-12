<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhoShouldLearn extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'whoshouldlearn';
    protected $fillable = [
        'name',
        'course_id'
       
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
