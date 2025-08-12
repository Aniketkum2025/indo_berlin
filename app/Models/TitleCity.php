<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TitleCity extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'title_city';
    protected $guarded = [];
}
