<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMEmployeeSupportLead extends Model
{
    protected $connection = 'mysql2';
    protected $table = "employee_support_leads";

    protected $guarded = [];
}
