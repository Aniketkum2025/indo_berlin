<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMEventEmployeeSupport extends Model
{
    protected $connection = 'mysql2';
    protected $table = "event_employee_support";
    protected $guarded = [];

    public function event(){
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
