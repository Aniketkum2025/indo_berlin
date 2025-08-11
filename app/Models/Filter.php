<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'filter';
    public $timestamps = false;
    protected $fillable = [
         'filter_name',
         'filter_tag'
       
    
    ];
  
}
