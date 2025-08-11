<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certificatecourse extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'certificate_course';
    protected $guarded = [];
}
