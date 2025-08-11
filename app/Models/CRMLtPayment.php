<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMLtPayment extends Model
{
    protected $connection = 'mysql2';
    protected $table = "lt_payments";

    protected $guarded = [];
}
