<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMComboCourse extends Model
{
    protected $connection = 'mysql2';
    protected $table="combo_course";
    
    protected $guarded = [];
}
