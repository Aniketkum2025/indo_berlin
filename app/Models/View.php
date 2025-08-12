<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'faq';
    protected $fillable = [
         'faq_question'
        ,'faq_answer' 
        ,'course_id' 
       
    ];
  
}
