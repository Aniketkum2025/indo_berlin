<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMRemuration extends Model
{
    protected $connection = 'mysql2';

    protected $table  = 'remunation_management';
    protected $guarded = [];
}
