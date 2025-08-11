<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMBatchDetail extends Model
{
    protected $connection = 'mysql2';
    protected $table = "batch_detail";

    protected $guarded = [];
}
