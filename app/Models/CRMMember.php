<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMMember extends Model
{
    protected $connection = 'mysql2';

    protected $table  = 'member';
    protected $guarded = [];
}
