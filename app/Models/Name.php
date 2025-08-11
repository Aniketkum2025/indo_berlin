<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'form_data';
    protected $fillable = [
         'name'  
    ];
}
