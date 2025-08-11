<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMLtAmount extends Model
{
    protected $connection = 'mysql2';
    protected $table = "lt_payment_amount";

    protected $guarded = [];
}
