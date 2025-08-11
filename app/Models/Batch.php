<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'batch';
    protected $fillable = [
         'batch_date'
        ,'batch_city' 
        ,'batch_price' 
        ,'batch_action' 
        ,'batch_type' 
        ,'batch_status'
        ,'course_id'
        ,'order_by'
        ,'expiry_date'
        
       
        

       
    ];
}
