<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppcadvantage extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'Ppcadvantage';
    //$table is create to stop adding 's' in last of table name by Eloquent model
    
    protected $fillable = [
         'ppc_course1_id'
        ,'logo'
        ,'image'
        ,'heading'
        ,'description'
        
    ];

}    