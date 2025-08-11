<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMEnrollment extends Model
{
    protected $connection = 'mysql2';
    protected $table = "enrollment";

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(CRMCourse1::class, 'course_id', 'id');
    }

    public function registration() {
        return $this->hasOne(CRMRegistration::class, 'id', 'registration_id');
    }

}
    

