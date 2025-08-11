<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keyfeatures extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'keyfeatures';
    protected $fillable = [
        'keyfeatures_title',
        'keyfeatures_image',
        'keyfeatures_description',
        'course_id',
       
    ];
}
