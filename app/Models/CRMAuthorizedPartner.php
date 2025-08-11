<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMAuthorizedPartner extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'authorized_partner';
    protected $guarded = [];
}
