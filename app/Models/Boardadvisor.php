<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boardadvisor extends Model
{
    protected $connection = 'mysql_website';
    protected $table = 'boardadvisors';
    protected $fillable = [
        'name',
        'designation',
        'image_url',
        'logo_url',
        'description',
        'academy_id',
    ];

    public function academy(){
        return $this->belongsTo(Academy::class);
    }
}
