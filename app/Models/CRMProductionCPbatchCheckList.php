<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMProductionCPbatchCheckList extends Model
{
    protected $connection = 'mysql2';
    protected $table = "prodcution_cp_checklist";

    protected $guarded = [];
}
