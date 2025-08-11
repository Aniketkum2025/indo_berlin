<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMRegistration extends Model
{
    protected $connection = 'mysql2';
    protected $table = "registration2";

    protected $guarded = [];

    public function enrollements(){
        return $this->hasMany(CRMEnrollment::class, 'registration_id', 'id');
    }
}
