<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aboutcourse extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'aboutcourse';
    protected $fillable = [
   'aboutcourse_title',
   'aboutcourse_content',
   'course_id',
    ];
    public function grab()
    {
        return $this->belongsTo(Review::class);
    }
}
