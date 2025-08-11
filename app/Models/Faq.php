<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faq extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'faq';
    protected $fillable = [
         'faq_question'
        ,'faq_answer' 
        ,'course_id' ,
         'slug',
         'country_id'
       
    ];
  
}
