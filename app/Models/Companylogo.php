<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Companylogo extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'companylogo';
    protected $fillable = [
         'com_logo'  
        ,'course_id'
       
    ];

    public function course()
    {
        return $this->belongsTo(course::class);
    }
}
