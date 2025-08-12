<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thankyouemail extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'thankyou_email';

    protected $fillable = [
        'email',
        'brochure',
        'course_name',
    ];
}