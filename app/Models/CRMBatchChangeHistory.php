<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMBatchChangeHistory extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'batch_change_history';

    protected $guarded = [];
}
