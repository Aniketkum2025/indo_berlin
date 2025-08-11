<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMWeeklyBestPerformers extends Model
{
    protected $connection = 'mysql2';
    protected $table = "best_performer_students";

    protected $guarded = [];

}
