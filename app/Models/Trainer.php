<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'trainer';
    protected $fillable = [
        'trainer_name'
       ,'trainer_image' 
       ,'trainer_description' 
       ,'course_id' 
      
   ];
}
