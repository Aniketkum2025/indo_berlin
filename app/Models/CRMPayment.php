<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CRMPayment extends Model
{
    protected $connection = 'mysql2';
    protected $table="payment";
    
    protected $guarded = [];

    protected $appends = ['formatted_created_at'];

    public function getFormattedCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d F Y');
    }

    public function lswsheet(){
        return $this->hasOne(CRMLswsheet::class, 'id', 'lead_id');
    }

    public function paymentCourses(){
        return $this->hasMany(CRMPaymentCourse::class, 'payment_id', 'id');
    }

    public function member(){
        return $this->hasOne(CRMMember::class, 'id', 'member_id');
    }
}
