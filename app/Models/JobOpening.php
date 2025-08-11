<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobOpening extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'job_opening';
    protected $guarded = [];

    public function applicants() {
        return $this->hasMany(JobApplicant::class, 'job_id', 'id');
    }
}