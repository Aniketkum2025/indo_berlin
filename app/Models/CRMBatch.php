<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMBatch extends Model
{
    protected $connection = 'mysql2';
    protected $table = "batch";

    protected $guarded = [];

    public function courses() {
        return $this->belongsTo(CRMCourse1::class, 'course', 'crm_course_id');
    }

    public function lastClass()
    {
        return $this->hasOne(CRMBatchDetail::class, 'batch_id', 'bid')->orderByDesc('date');;
    }
}
