<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CRMLswsheet extends Model
{
    protected $connection = 'mysql2';
    protected $table="lswsheets";
    
    protected $guarded = [];
    public function member(){
        return $this->belongsTo(CRMMember::class, 'member_id', 'id');
    }
    public function payments(){
        return $this->hasMany(CRMPayment::class, 'lead_id', 'id');
    }
}
