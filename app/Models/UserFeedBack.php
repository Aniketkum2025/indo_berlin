<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFeedBack extends Model
{
    protected $connection = 'mysql2';
    protected $table="user_feedback";

    protected $guarded = [];
}
