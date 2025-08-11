<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CRMCourse1 extends Model
{
    protected $connection = 'mysql2';
    protected $table = "course";

    protected $guarded = [];

    public function enrollments()
    {
        $now = date('Y-m-d H:i:s');
        $three_month_before = date('Y-m-d H:i:s', strtotime('-3 months', strtotime($now)));
        return $this->hasMany(CRMEnrollment::class, 'course_id', 'id')->whereBetween('created_at', [$three_month_before, $now]);
    }
    public function prevmonthenrollments()
    {
        $now = date('Y-m-d H:i:s');
        $three_month_before = date('Y-m-d H:i:s', strtotime('-1 months', strtotime($now)));
        return $this->hasMany(CRMEnrollment::class, 'course_id', 'id')->whereBetween('created_at', [$three_month_before, $now]);
    }
    public function batch(){
        return $this->hasOne(CRMBatch::class, 'course', 'crm_course_id')
                ->where('is_deleted', 0)
                ->where('batchDate', '>=', date('Y-m-d'))
                ->orderBy('batchDate');
    }
    public function trainers()
    {
        return $this->belongsToMany(CRMTrainerCourse::class, 'id', 'course_id');
    }

    public function course() {
        return $this->belongsTo(Course::class, 'crm_course_id', 'crm_course_id');
    }

    public function combo_course() {
        return $this->hasOne(CRMComboCourse::class, 'main_course_id', 'id');
    }
}
