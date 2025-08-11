<?php

namespace App\Models;
use App\Course;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'coupon';
    protected $fillable = ['name','valid_till','coupon','percentage'];
    
}
