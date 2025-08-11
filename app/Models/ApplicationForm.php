<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplicationForm extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql2';
    protected $table = 'application_form';
    protected $guarded = [];
}
