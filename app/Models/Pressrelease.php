<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pressrelease extends Model
{
    use SoftDeletes;
    protected $connection = 'mysql_website';
    protected $table = 'press_release';
    protected $guarded = [];
}
