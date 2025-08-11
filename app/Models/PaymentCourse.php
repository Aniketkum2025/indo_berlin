<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentCourse extends Model
{
    // use HasFactory;
    public $connection = 'mysql2';
    public $table = "payment_course";
    public $timestamp = true;

    protected $fillable = ['payment_id', 'course_id',];

}
