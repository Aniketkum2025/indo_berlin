<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadQueue extends Model
{
    protected $connection = 'mysql2';
    protected $table="lead_queue";
    
    protected $guarded = [];

    public $timestamps = false;
}
