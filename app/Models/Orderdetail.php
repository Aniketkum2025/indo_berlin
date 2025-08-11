<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{

    protected $connection = 'mysql_website';
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function variation(){
        return $this->belongsTo(Variation::class);
    }
}
