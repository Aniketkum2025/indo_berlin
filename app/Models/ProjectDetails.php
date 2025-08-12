<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectDetails extends Model
{
    protected $connection = 'mysql_website';
    public $table = 'project_details';
    public $guarded = [];
}
