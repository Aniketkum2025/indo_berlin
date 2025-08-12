<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'review';
    protected $fillable = [
        'review_name',
        'review_image',
        'review_rating',
        'review_description',
        'review_linked_in',
        'course_id',
        'slug',
        'review_link',
        'country_id'
       
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
   
}
