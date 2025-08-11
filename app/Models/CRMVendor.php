<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMVendor extends Model
{
    protected $connection = 'mysql2';
    protected $table="vendors";
    
    protected $guarded = [];
}
