<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Affiliation extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'affiliation';
   protected $guarded = [];

    public function course_name()
    {
        return $this->belongsTo(Academy::class);
    }
}
