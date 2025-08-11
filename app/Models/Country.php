<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'countries';
    protected $fillable = ['name','country_code','flag','support_no','isd_code','show_on_course'];

    public function city() {
        return $this->hasMany('App\Cities');
    }
}
