<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'cities';
    protected $fillable = [
         'city_name'  
        ,'city_state'
        ,'country_id'
    ];

    public $timestamps = false;

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
