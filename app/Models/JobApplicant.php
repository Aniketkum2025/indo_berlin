<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobApplicant extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'job_applicant';
    protected $guarded = [];
}
