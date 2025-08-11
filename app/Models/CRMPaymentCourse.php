<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMPaymentCourse extends Model
{
    protected $connection = 'mysql2';
    protected $table="payment_course";
    
    protected $guarded = [];

    public function course(){
        return $this->hasOne(CRMCourse1::class, 'id', 'course_id');
    }
}
