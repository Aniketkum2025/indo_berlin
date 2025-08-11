<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobProfile extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'jobprofiles';
    protected $fillable = [
        'jobprofile',
        'course_id',
   ];
}
