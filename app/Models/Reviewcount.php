<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviewcount extends Model
{
    protected $connection = 'mysql_website';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
