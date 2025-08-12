<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{

    protected $connection = 'mysql_website';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function attribute(){
        return $this->belongsTo(Attribute::class);
    }

    public function orderdetails(){
        return $this->hasOne(Orderdetail::class);
    }
}
