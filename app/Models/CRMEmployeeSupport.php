<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMEmployeeSupport extends Model
{
    protected $connection = 'mysql2';
    protected $table = "employee_support";

    protected $guarded = [];

    public function crmcourse(){
        return $this->hasOne(CRMCourse1::class, 'crm_course_id', 'course');
    }
}
