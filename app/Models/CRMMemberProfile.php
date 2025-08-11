<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMMemberProfile extends Model
{
    protected $connection = 'mysql2';

    protected $table  = 'member_profile';
}
