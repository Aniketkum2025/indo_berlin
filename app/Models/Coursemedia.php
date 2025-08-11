<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coursemedia extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'course_media';
    protected $fillable = [
         
        'heading'
        ,'media'
        ,'link' 
        ,'course_id' 
      
       
    ];

    public function course_name()
    {
        return $this->belongsTo(Academy::class);
    }
}
