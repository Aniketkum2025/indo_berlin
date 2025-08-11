<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'ebook';
    protected $fillable = [
         'ebook_url'
        ,'slug' 
        ,'location' 
        
    ];
  
}
