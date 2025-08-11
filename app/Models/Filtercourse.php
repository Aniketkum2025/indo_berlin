<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filtercourse extends Model
{
  protected $connection = 'mysql_website';
    protected $table = 'filtercourse';
    public $timestamps = false;
    protected $fillable = [
         'data',
         'filter_name',
         'filter_tag'

       ];
  
}
