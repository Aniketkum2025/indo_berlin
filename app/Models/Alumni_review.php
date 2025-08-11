<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumni_review extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'alumni_review';
    protected $fillable = [
        'review',
        'name',
        'post',
        'company_logo',
        'reviewer_image',
        'course_id',
   ];
   public function course()
   {
       return $this->belongsTo(course::class);
   }
}