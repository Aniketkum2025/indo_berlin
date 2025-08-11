<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeadTracking extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'lead_tracking';
    protected $guarded = [];
}
