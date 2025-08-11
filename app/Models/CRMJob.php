<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMJob extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'jobs';
    protected $guarded = [];
}
