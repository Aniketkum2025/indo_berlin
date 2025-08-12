<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{

    protected $connection = 'mysql_website';
    protected $table = 'testimonial';
    protected $fillable = [
        'video_thumbnail',
        'video_url',
        'course_id',
       
    ];
    
  
}
