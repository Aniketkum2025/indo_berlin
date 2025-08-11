<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarrierOpportunities extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'carrier_opportunities';
    protected $fillable = [
        'name',
        'avg_salary',
        'first_img',
        'second_img',
        'third_img',
        'course_id'
       
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
